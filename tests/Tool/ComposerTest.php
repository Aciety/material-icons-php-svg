<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons\Tests\Tool;

use Aciety\Component\MaterialIcons\Tool\Composer as ComposerScript;
use Composer\Composer;
use Composer\Config;
use Composer\IO\IOInterface;
use Composer\Package\RootPackage;
use Composer\Script\Event;
use org\bovigo\vfs\vfsStreamDirectory;
use org\bovigo\vfs\vfsStreamFile;
use org\bovigo\vfs\vfsStreamWrapper;
use PHPUnit\Framework\TestCase;

final class ComposerTest extends TestCase
{
    private readonly string $vendorDir;
    private readonly vfsStreamDirectory $srcDir;

    protected function setUp(): void
    {
        vfsStreamWrapper::register();
        vfsStreamWrapper::setRoot($vendorDir = new vfsStreamDirectory('vendor'));
        $vendorDir->addChild($c1 = new vfsStreamDirectory('aciety'));
        $c1->addChild($c2 = new vfsStreamDirectory('material-icons'));
        $c2->addChild($c3 = new vfsStreamDirectory('src'));
        $c3->addChild($c4 = new vfsStreamDirectory('inner'));
        $c3->addChild(new vfsStreamFile('AbcIcon.php'));
        $c3->addChild(new vfsStreamFile('AbcOutlinedIcon.php'));
        $c3->addChild(new vfsStreamFile('AbcRoundedIcon.php'));
        $c3->addChild(new vfsStreamFile('AbcSharpIcon.php'));
        $c3->addChild(new vfsStreamFile('AbcTwoToneIcon.php'));
        $c4->addChild(new vfsStreamFile('AbcRoundedIcon.php'));
        $this->vendorDir = vfsStreamWrapper::getRoot()->url();
        $this->srcDir = $c3;
    }

    protected function tearDown(): void
    {
        vfsStreamWrapper::unregister();
    }

    /**
     * @dataProvider provideTestCases
     */
    public function testCleanup(array $extra, array $expectedFiles, ?string $expectedIoWrite): void
    {
        $rootPackage = $this->createMock(RootPackage::class);
        $rootPackage->expects(self::once())
            ->method('getExtra')
            ->willReturn($extra);

        $config = $this->createMock(Config::class);
        $config->expects(self::any())
            ->method('get')
            ->with('vendor-dir')
            ->willReturn($this->vendorDir);

        $composer = $this->createMock(Composer::class);
        $composer->expects(self::once())
            ->method('getPackage')
            ->willReturn($rootPackage);
        $composer->expects(self::any())
            ->method('getConfig')
            ->willReturn($config);

        $io = $this->createMock(IOInterface::class);
        $io->expects($expectedIoWrite !== null ? self::once() : self::never())
            ->method('write')
            ->with($expectedIoWrite);

        $event = new Event('pre-autoload-dump', $composer, $io, true);

        ComposerScript::cleanup($event);

        foreach ($expectedFiles as $file) {
            self::assertTrue($this->srcDir->hasChild($file));
        }
    }

    public function provideTestCases(): iterable
    {
        yield [
            'extra' => [],
            'expectedFiles' => ['AbcIcon.php', 'AbcOutlinedIcon.php', 'AbcRoundedIcon.php', 'AbcSharpIcon.php', 'AbcTwoToneIcon.php', 'inner/AbcRoundedIcon.php'],
            'expectedIoWrite' => null,
        ];

        yield [
            'extra' => ['aciety/material-icons' => []],
            'expectedFiles' => ['AbcIcon.php', 'AbcOutlinedIcon.php', 'AbcRoundedIcon.php', 'AbcSharpIcon.php', 'AbcTwoToneIcon.php', 'inner/AbcRoundedIcon.php'],
            'expectedIoWrite' => null,
        ];

        yield [
            'extra' => ['aciety/material-icons' => ['exclude' => []]],
            'expectedFiles' => ['AbcIcon.php', 'AbcOutlinedIcon.php', 'AbcRoundedIcon.php', 'AbcSharpIcon.php', 'AbcTwoToneIcon.php', 'inner/AbcRoundedIcon.php'],
            'expectedIoWrite' => null,
        ];

        yield [
            'extra' => ['aciety/material-icons' => ['exclude' => ['NotAnIcon.php']]],
            'expectedFiles' => ['AbcIcon.php', 'AbcOutlinedIcon.php', 'AbcRoundedIcon.php', 'AbcSharpIcon.php', 'AbcTwoToneIcon.php', 'inner/AbcRoundedIcon.php'],
            'expectedIoWrite' => null,
        ];

        yield [
            'extra' => ['aciety/material-icons' => ['exclude' => ['AbcIcon.php']]],
            'expectedFiles' => ['AbcOutlinedIcon.php', 'AbcRoundedIcon.php', 'AbcSharpIcon.php', 'AbcTwoToneIcon.php', 'inner/AbcRoundedIcon.php'],
            'expectedIoWrite' => 'Removing 1 icon from "aciety/material-icons" package.',
        ];

        yield [
            'extra' => ['aciety/material-icons' => ['exclude' => ['*TwoTone*']]],
            'expectedFiles' => ['AbcIcon.php', 'AbcOutlinedIcon.php', 'AbcRoundedIcon.php', 'AbcSharpIcon.php', 'inner/AbcRoundedIcon.php'],
            'expectedIoWrite' => 'Removing 1 icon from "aciety/material-icons" package.',
        ];

        yield [
            'extra' => ['aciety/material-icons' => ['exclude' => ['/SharpIcon\.php$/']]],
            'expectedFiles' => ['AbcIcon.php', 'AbcOutlinedIcon.php', 'AbcRoundedIcon.php', 'inner/AbcRoundedIcon.php'],
            'expectedIoWrite' => 'Removing 1 icon from "aciety/material-icons" package.',
        ];

        yield [
            'extra' => ['aciety/material-icons' => ['exclude' => ['AbcIcon.php', '*TwoTone*', '/SharpIcon\.php$/']]],
            'expectedFiles' => ['AbcOutlinedIcon.php', 'AbcRoundedIcon.php', 'inner/AbcRoundedIcon.php'],
            'expectedIoWrite' => 'Removing 3 icons from "aciety/material-icons" package.',
        ];
    }
}
