<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons\Tests\Tool;

use Aciety\Component\MaterialIcons\Tool\IconBuilder;
use PHPUnit\Framework\Attributes\DataProvider;
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
     * @param list<non-empty-string> $categories
     * @param list<non-empty-string> $tags
     */
    #[DataProvider('provideTestCases')]
    public function testBuild(string $srcFile, array $categories, array $tags, string $expectedFile): void
    {
        $svg = SVG::fromFile(__DIR__.'/../Fixtures/'.$srcFile);

        $this->assertNotNull($svg);
        $this->assertStringEqualsFile(__DIR__.'/../Fixtures/build/'.$expectedFile, $this->builder->build($svg, basename($expectedFile, '.phpt'), $categories, $tags));
    }

    /**
     * @return iterable<array{srcFile: non-empty-string, categories: list<non-empty-string>, tags: list<non-empty-string>, expectedFile: non-empty-string}>
     */
    public static function provideTestCases(): iterable
    {
        yield [
            'srcFile' => 'abc_24px.svg',
            'categories' => ['action'],
            'tags' => ['alphabet', 'character', 'font', 'letter', 'symbol', 'text', 'type'],
            'expectedFile' => 'AbcIcon.phpt',
        ];

        yield [
            'srcFile' => 'medication_liquid_two_tone_24px.svg',
            'categories' => ['device'],
            'tags' => ['+', 'bottle', 'doctor', 'drug', 'health', 'hospital', 'liquid', 'medications', 'medicine', 'pharmacy', 'spoon', 'vessel'],
            'expectedFile' => 'MedicationLiquidTwoToneIcon.phpt',
        ];

        yield [
            'srcFile' => 'woman_sharp_24px.svg',
            'categories' => ['social'],
            'tags' => ['female', 'gender', 'girl', 'lady', 'social', 'symbol', 'woman', 'women'],
            'expectedFile' => 'WomanSharpIcon.phpt',
        ];

        yield [
            'srcFile' => 'account_tree_two_tone_24px.svg',
            'categories' => ['notification'],
            'tags' => ['account', 'analytics', 'chart', 'connect', 'data', 'diagram', 'flow', 'graph', 'infographic', 'measure', 'metrics', 'process', 'square', 'statistics', 'structure', 'tracking', 'tree'],
            'expectedFile' => 'AccountTreeTwoToneIcon.phpt',
        ];

        yield [
            'srcFile' => 'integration_instructions_two_tone_24px.svg',
            'categories' => ['action'],
            'tags' => ['brackets', 'clipboard', 'code', 'css', 'develop', 'developer', 'doc', 'document', 'engineer', 'engineering clipboard', 'html', 'instructions', 'integration', 'platform'],
            'expectedFile' => 'IntegrationInstructionsTwoToneIcon.phpt',
        ];

        yield [
            'srcFile' => 'assistant_direction_24px.svg',
            'categories' => ['navigation'],
            'tags' => ['assistant', 'destination', 'direction', 'location', 'maps', 'navigate', 'navigation', 'pin', 'place', 'right', 'stop'],
            'expectedFile' => 'AssistantDirectionIcon.phpt',
        ];
    }

    public function testBuildFails(): void
    {
        $svg = SVG::fromFile(__DIR__.'/../Fixtures/custom.svg');

        $this->assertNotNull($svg);

        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('Unsupported element "SVG\Nodes\Structures\SVGMask" found to build "CustomIcon" icon.');

        $this->builder->build($svg, 'CustomIcon', [], []);
    }
}
