<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons\Tests\Tool;

use Aciety\Component\MaterialIcons\Tool\IconBuilder;
use PHPUnit\Framework\TestCase;
use RuntimeException;
use SVG\SVG;

final class IconBuilderTest extends TestCase
{
    protected readonly IconBuilder $builder;

    protected function setUp(): void
    {
        $this->builder = new IconBuilder();
    }

    /**
     * @testWith ["abc_24px.svg", "AbcIcon.phpt"]
     *           ["medication_liquid_two_tone_24px.svg", "MedicationLiquidTwoToneIcon.phpt"]
     *           ["woman_sharp_24px.svg", "WomanSharpIcon.phpt"]
     *           ["account_tree_two_tone_24px.svg", "AccountTreeTwoToneIcon.phpt"]
     *           ["integration_instructions_two_tone_24px.svg", "IntegrationInstructionsTwoToneIcon.phpt"]
     *           ["assistant_direction_24px.svg", "AssistantDirectionIcon.phpt"]
     */
    public function testBuild(string $srcFile, string $expectedFile): void
    {
        $svg = SVG::fromFile(__DIR__.'/../Fixtures/'.$srcFile);

        self::assertStringEqualsFile(__DIR__.'/../Fixtures/build/'.$expectedFile, $this->builder->build($svg, basename($expectedFile, '.phpt')));
    }

    public function testBuildFails(): void
    {
        $svg = SVG::fromFile(__DIR__.'/../Fixtures/custom.svg');

        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Unsupported element "SVG\Nodes\Structures\SVGMask" found to build "CustomIcon" icon.');

        $this->builder->build($svg, 'CustomIcon');
    }
}
