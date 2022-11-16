<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons\Tests\Tool;

use Aciety\Component\MaterialIcons\Tool\IconDownloader;
use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamDirectory;
use org\bovigo\vfs\vfsStreamWrapper;
use PHPUnit\Framework\TestCase;
use RuntimeException;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\HttpClient\Response\MockResponse;

use function basename;
use function file_get_contents;

final class IconDownloaderTest extends TestCase
{
    /**
     * @var non-empty-string
     */
    private readonly string $directory;
    private readonly MockHttpClient $httpClient;
    private readonly IconDownloader $downloader;

    protected function setUp(): void
    {
        vfsStreamWrapper::register();
        vfsStreamWrapper::setRoot(new vfsStreamDirectory('material-icons'));

        $directory = vfsStream::url('material-icons');
        self::assertNotEmpty($directory);
        $this->directory = $directory;
        $this->httpClient = new MockHttpClient();
        $this->downloader = new IconDownloader($this->httpClient);
    }

    protected function tearDown(): void
    {
        vfsStreamWrapper::unregister();
    }

    public function testDownload(): void
    {
        $expectedCalls = [
            ['GET', 'https://fonts.google.com/metadata/icons', __DIR__.'/../Fixtures/icon_metadata', ['Content-Type: application/json; charset=utf-8', 'Content-Disposition: attachment; filename="json.txt"; filename*=UTF-8\'\'json.txt']],
            ['GET', 'https://fonts.gstatic.com/s/i/materialicons/1k/v10/24px.svg', __DIR__.'/../Fixtures/1k_24px.svg', ['Content-Type: application/json; charset=utf-8', 'Content-Disposition: attachment; filename="json.txt"; filename*=UTF-8\'\'json.txt']],
            ['GET', 'https://fonts.gstatic.com/s/i/materialiconsoutlined/1k/v10/24px.svg', __DIR__.'/../Fixtures/1k_outlined_24px.svg', ['Content-Type: application/json; charset=utf-8', 'Content-Disposition: attachment; filename="json.txt"; filename*=UTF-8\'\'json.txt']],
            ['GET', 'https://fonts.gstatic.com/s/i/materialiconsround/1k/v10/24px.svg', __DIR__.'/../Fixtures/1k_rounded_24px.svg', ['Content-Type: application/json; charset=utf-8', 'Content-Disposition: attachment; filename="json.txt"; filename*=UTF-8\'\'json.txt']],
            ['GET', 'https://fonts.gstatic.com/s/i/materialiconstwotone/1k/v10/24px.svg', __DIR__.'/../Fixtures/1k_two_tone_24px.svg', ['Content-Type: application/json; charset=utf-8', 'Content-Disposition: attachment; filename="json.txt"; filename*=UTF-8\'\'json.txt']],
            ['GET', 'https://fonts.gstatic.com/s/i/materialiconssharp/1k/v10/24px.svg', __DIR__.'/../Fixtures/1k_sharp_24px.svg', ['Content-Type: application/json; charset=utf-8', 'Content-Disposition: attachment; filename="json.txt"; filename*=UTF-8\'\'json.txt']],
            ['GET', 'https://fonts.gstatic.com/s/i/materialicons/signal_wifi_statusbar_connected_no_internet_4/v11/24px.svg', __DIR__.'/../Fixtures/signal_wifi_statusbar_connected_no_internet_4_24px.svg', ['Content-Type: application/json; charset=utf-8', 'Content-Disposition: attachment; filename="json.txt"; filename*=UTF-8\'\'json.txt']],
            ['GET', 'https://fonts.gstatic.com/s/i/materialiconsoutlined/signal_wifi_statusbar_connected_no_internet_4/v11/24px.svg', __DIR__.'/../Fixtures/signal_wifi_statusbar_connected_no_internet_4_outlined_24px.svg', ['Content-Type: application/json; charset=utf-8', 'Content-Disposition: attachment; filename="json.txt"; filename*=UTF-8\'\'json.txt']],
            ['GET', 'https://fonts.gstatic.com/s/i/materialiconsround/signal_wifi_statusbar_connected_no_internet_4/v11/24px.svg', __DIR__.'/../Fixtures/signal_wifi_statusbar_connected_no_internet_4_rounded_24px.svg', ['Content-Type: application/json; charset=utf-8', 'Content-Disposition: attachment; filename="json.txt"; filename*=UTF-8\'\'json.txt']],
            ['GET', 'https://fonts.gstatic.com/s/i/materialiconstwotone/signal_wifi_statusbar_connected_no_internet_4/v11/24px.svg', __DIR__.'/../Fixtures/signal_wifi_statusbar_connected_no_internet_4_two_tone_24px.svg', ['Content-Type: application/json; charset=utf-8', 'Content-Disposition: attachment; filename="json.txt"; filename*=UTF-8\'\'json.txt']],
            ['GET', 'https://fonts.gstatic.com/s/i/materialiconssharp/signal_wifi_statusbar_connected_no_internet_4/v11/24px.svg', __DIR__.'/../Fixtures/signal_wifi_statusbar_connected_no_internet_4_sharp_24px.svg', ['Content-Type: application/json; charset=utf-8', 'Content-Disposition: attachment; filename="json.txt"; filename*=UTF-8\'\'json.txt']],
        ];

        $callIndex = 0;
        $this->httpClient->setResponseFactory(static function (string $method, string $url, array $options) use (&$callIndex, $expectedCalls) {
            if (!isset($expectedCalls[$callIndex])) {
                self::fail("Unexpected http call at index $callIndex");
            }

            $expectedCall = $expectedCalls[$callIndex];

            self::assertSame($expectedCall[0], $method);
            self::assertSame($expectedCall[1], $url);
            if ($callIndex > 0) {
                self::assertArrayHasKey('user_data', $options);
                self::assertSame(basename($expectedCall[2]), $options['user_data']);
            }

            $content = file_get_contents($expectedCall[2]);

            if ($content === false) {
                self::fail('Failed to read fixture file: '.$expectedCall[2]);
            }

            ++$callIndex;

            return new MockResponse($content, $expectedCall[3]);
        });

        $this->downloader->download($this->directory);

        $expectedFiles = [
            '1k_24px.svg',
            '1k_outlined_24px.svg',
            '1k_rounded_24px.svg',
            '1k_sharp_24px.svg',
            '1k_two_tone_24px.svg',
            'signal_wifi_statusbar_connected_no_internet_4_24px.svg',
            'signal_wifi_statusbar_connected_no_internet_4_outlined_24px.svg',
            'signal_wifi_statusbar_connected_no_internet_4_rounded_24px.svg',
            'signal_wifi_statusbar_connected_no_internet_4_sharp_24px.svg',
            'signal_wifi_statusbar_connected_no_internet_4_two_tone_24px.svg',
        ];

        foreach ($expectedFiles as $expectedFile) {
            self::assertFileExists($this->directory.'/'.$expectedFile);
            self::assertXmlFileEqualsXmlFile($this->directory.'/'.$expectedFile, __DIR__.'/../Fixtures/'.$expectedFile);
        }
    }

    public function testDownloadFail(): void
    {
        $this->httpClient->setResponseFactory(static function (string $method, string $url, array $options) {
            self::assertSame('GET', $method);
            self::assertSame('https://fonts.google.com/metadata/icons', $url);

            return new MockResponse('Server error', ['http_code' => 500]);
        });

        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Failed to download icons metadata: "Server error".');

        $this->downloader->download($this->directory);
    }
}
