<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons\Tool;

use RuntimeException;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGEllipse;
use SVG\Nodes\Shapes\SVGLine;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGPolyline;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGClipPath;
use SVG\Nodes\Structures\SVGDefs;
use SVG\Nodes\Structures\SVGGroup;
use SVG\Nodes\Structures\SVGUse;
use SVG\Nodes\SVGNode;
use SVG\Nodes\SVGNodeContainer;
use SVG\Nodes\Texts\SVGTitle;
use SVG\SVG;

use function count;
use function in_array;

final class IconBuilder
{
    /**
     * @param non-empty-string       $iconName
     * @param list<non-empty-string> $categories
     * @param list<non-empty-string> $tags
     *
     * @return non-empty-string
     */
    public function build(SVG $svg, string $iconName, array $categories, array $tags): string
    {
        $template = new IconPhpTemplate($iconName, $categories, $tags);
        $template->addCall('$doc = $this->getDocument();');
        $template->addCall('$doc->setAttribute(\'viewBox\', \'0 0 24 24\');');

        self::inlineSvg($template, $iconName, self::getDirectSvgChildren($svg->getDocument()), 0, '$doc');

        return $template->getOutput();
    }

    /**
     * @return iterable<int, SVGNode>
     */
    private static function getDirectSvgChildren(SVGNodeContainer $node): iterable
    {
        for ($i = 0, $len = $node->countChildren(); $i < $len; ++$i) {
            yield $i => $node->getChild($i);
        }
    }

    /**
     * @param non-empty-string       $name
     * @param iterable<int, SVGNode> $nodes
     * @param int<0, max>            $lvl
     * @param non-empty-string       $parentVar
     */
    private static function inlineSvg(IconPhpTemplate $template, string $name, iterable $nodes, int $lvl, string $parentVar): void
    {
        foreach ($nodes as $idx => $child) {
            $childVar = "\$l{$lvl}I$idx";
            $ignoreAttributes = [];

            if ($child instanceof SVGGroup) {
                $template->addUse(SVGGroup::class);
                $template->addCall("$childVar = new SVGGroup();");
                self::inlineSvg($template, $name, self::getDirectSvgChildren($child), $lvl + 1, $childVar);
            } elseif ($child instanceof SVGDefs) {
                $template->addUse(SVGDefs::class);
                $template->addCall("$childVar = new SVGDefs();");
                self::inlineSvg($template, $name, self::getDirectSvgChildren($child), $lvl + 1, $childVar);
            } elseif ($child instanceof SVGUse) {
                $template->addUse(SVGUse::class);
                $template->addCall("$childVar = new SVGUse();");
            } elseif ($child instanceof SVGClipPath) {
                $ignoreAttributes[] = 'id';
                $template->addUse(SVGClipPath::class);
                $template->addCall("$childVar = new SVGClipPath(id: '{$child->getAttribute('id')}');");
                self::inlineSvg($template, $name, self::getDirectSvgChildren($child), $lvl + 1, $childVar);
            } elseif ($child instanceof SVGPath) {
                $ignoreAttributes[] = 'd';
                $template->addUse(SVGPath::class);
                $template->addCall("$childVar = new SVGPath(d: '{$child->getDescription()}');");
            } elseif ($child instanceof SVGRect) {
                $ignoreAttributes = ['x', 'y', 'width', 'height'];
                $template->addUse(SVGRect::class);
                $x = $child->getX() !== null ? "'{$child->getX()}'" : 'null';
                $y = $child->getY() !== null ? "'{$child->getY()}'" : 'null';
                $template->addCall("$childVar = new SVGRect(x: $x, y: $y, width: '{$child->getWidth()}', height: '{$child->getHeight()}');");
            } elseif ($child instanceof SVGCircle) {
                $ignoreAttributes = ['cx', 'cy', 'r'];
                $template->addUse(SVGCircle::class);
                $template->addCall("$childVar = new SVGCircle(cx: '{$child->getCenterX()}', cy: '{$child->getCenterY()}', r: '{$child->getRadius()}');");
            } elseif ($child instanceof SVGPolygon) {
                $ignoreAttributes[] = 'points';
                $template->addUse(SVGPolygon::class);
                $template->addCall("$childVar = new SVGPolygon(points: [".self::normalizePoints($child->getPoints()).']);');
            } elseif ($child instanceof SVGPolyline) {
                $ignoreAttributes[] = 'points';
                $template->addUse(SVGPolyline::class);
                $template->addCall("$childVar = new SVGPolyline(points: [".self::normalizePoints($child->getPoints()).']);');
            } elseif ($child instanceof SVGEllipse) {
                $ignoreAttributes = ['cx', 'cy', 'rx', 'ry'];
                $template->addUse(SVGEllipse::class);
                $template->addCall("$childVar = new SVGEllipse(cx: '{$child->getCenterX()}', cy: '{$child->getCenterY()}', rx: '{$child->getRadiusX()}', ry: '{$child->getRadiusY()}');");
            } elseif ($child instanceof SVGLine) {
                $ignoreAttributes = ['x1', 'y1', 'x2', 'y2'];
                $template->addUse(SVGLine::class);
                $template->addCall("$childVar = new SVGLine(x1: '{$child->getX1()}', y1: '{$child->getY1()}', x2: '{$child->getX2()}', y2: '{$child->getY2()}');");
            } elseif ($child instanceof SVGTitle) {
                $ignoreAttributes[] = 'text';
                $template->addUse(SVGTitle::class);
                $template->addCall("$childVar = new SVGTitle(text: '{$child->getValue()}');");
            } else {
                throw new RuntimeException(sprintf('Unsupported element "%s" found to build "%s" icon.', get_debug_type($child), $name));
            }

            foreach ($child->getSerializableAttributes() as $k => $v) {
                if (in_array($k, $ignoreAttributes, true)) {
                    continue;
                }

                $template->addCall($childVar."->setAttribute('$k', '$v');");
            }

            foreach ($child->getSerializableStyles() as $k => $v) {
                $template->addCall($childVar."->setStyle('$k', '$v');");
            }

            $template->addCall($parentVar."->addChild($childVar);");
        }
    }

    /**
     * @param list<array{0: int|float, 1: int|float}> $points
     *
     * @return non-empty-string
     */
    private static function normalizePoints(array $points): string
    {
        $normalized = '';

        for ($i = 0, $cp = $points, $pl = count($cp); $i < $pl; ++$i) {
            $normalized .= '['.$cp[$i][0].', '.$cp[$i][1].']'.($i + 1 !== $pl ? ', ' : '');
        }

        return $normalized;
    }
}
