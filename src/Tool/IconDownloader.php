<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons\Tool;

use RuntimeException;
use Symfony\Contracts\HttpClient\HttpClientInterface;

use function explode;
use function file_put_contents;
use function implode;
use function json_decode;
use function sprintf;
use function str_replace;

final class IconDownloader
{
    public const THEME_MAP = [
        'baseline' => '', // filled
        'outline' => '_outlined',
        'round' => '_round',
        'twotone' => '_two_tone',
        'sharp' => '_sharp',
    ];

    public const THEME_FILE_MAP = [
        'baseline' => '', // filled
        'outline' => '_outlined',
        'round' => '_rounded',
        'twotone' => '_two_tone',
        'sharp' => '_sharp',
    ];

    /**
     * @var array<non-empty-string, list<non-empty-string>>
     */
    private const TAGS_REPLACEMENT = [
        'dynamic_feed' => [
            'layer', 'live', 'mail_outline', 'multiple', 'post', 'refresh', 'update',
        ],
        'grade' => [
            'achievement', 'favorite_news', 'important', 'likes', 'marked', 'rated', 'rating', 'reward', 'saved',
            'shape', 'special', 'star_border_purple500', 'star_outline',
        ],
        'grading' => [
            'approve', 'check', 'complete', 'document', 'done', 'feedback', 'grade', 'mark', 'ok', 'reviewed', 'select',
            'star_boarder', 'star_border_purple500', 'star_outline', 'star_purple500', 'star_rate', 'tick', 'validate',
            'verified', 'writing', 'yes',
        ],
    ];

    public function __construct(
        private readonly HttpClientInterface $httpClient,
    ) {
    }

    /**
     * @param non-empty-string $dir
     */
    public function download(string $dir): void
    {
        $response = $this->httpClient->request('GET', 'https://fonts.google.com/metadata/icons');

        if ($response->getStatusCode() !== 200) {
            throw new RuntimeException(sprintf('Failed to download icons metadata: "%s".', $response->getContent(throw: false)));
        }

        $text = $response->getContent();
        /** @var array{icons: list<array{name: non-empty-string, version: int, categories: list<non-empty-string>, tags: list<non-empty-string>}>} $data */
        $data = json_decode(str_replace(")]}'", '', $text), true, 512, JSON_THROW_ON_ERROR);
        $icons = $data['icons'];
        $responses = [];
        $categories = [];
        $tags = [];

        foreach ($icons as $icon) {
            $categories[$icon['name']] = $icon['categories'];
            $tags[$icon['name']] = self::TAGS_REPLACEMENT[$icon['name']] ?? $icon['tags'];

            foreach (self::THEME_MAP as $k => $v) {
                $formattedTheme = implode('', explode('_', $v));

                $responses[] = $this->httpClient->request('GET', sprintf('https://fonts.gstatic.com/s/i/materialicons%s/%s/v%s/24px.svg', $formattedTheme, $icon['name'], $icon['version']), [
                    'user_data' => $icon['name'].self::THEME_FILE_MAP[$k].'_24px.svg',
                ]);
            }
        }

        foreach ($responses as $iconResponse) {
            $fileName = $iconResponse->getInfo('user_data');
            $content = $iconResponse->getContent();

            file_put_contents($dir.'/'.$fileName, $content);
        }

        file_put_contents($dir.'/_categories.json', json_encode($categories, JSON_THROW_ON_ERROR));
        file_put_contents($dir.'/_tags.json', json_encode($tags, JSON_THROW_ON_ERROR));
    }
}
