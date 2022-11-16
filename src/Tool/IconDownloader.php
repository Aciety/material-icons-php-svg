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
    private const THEME_MAP = [
        'baseline' => '', // filled
        'outline' => '_outlined',
        'round' => '_round',
        'twotone' => '_two_tone',
        'sharp' => '_sharp',
    ];

    private const THEME_FILE_MAP = [
        'baseline' => '', // filled
        'outline' => '_outlined',
        'round' => '_rounded',
        'twotone' => '_two_tone',
        'sharp' => '_sharp',
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
        /** @var array{icons: list<array{name: non-empty-string, version: int}>} $data */
        $data = json_decode(str_replace(")]}'", '', $text), true, 512, JSON_THROW_ON_ERROR);
        $icons = $data['icons'];
        $responses = [];

        foreach ($icons as $icon) {
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
    }
}
