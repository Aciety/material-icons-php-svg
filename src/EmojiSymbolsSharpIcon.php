<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['ampersand', 'character', 'emoji', 'hieroglyph', 'music', 'note', 'percent', 'sign', 'symbols'],
)]
final class EmojiSymbolsSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGRect(x: '3', y: '2', width: '8', height: '2');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[6, 11], [8, 11], [8, 7], [11, 7], [11, 5], [3, 5], [3, 7], [6, 7]]);
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGRect(x: '11.5', y: '16', width: '11', height: '2');
        $l2I2->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -7.0416 16.9999)');
        $l1I1->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '14.5', cy: '14.5', r: '1.5');
        $l1I1->addChild($l2I3);
        $l2I4 = new SVGCircle(cx: '19.5', cy: '19.5', r: '1.5');
        $l1I1->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M15.5,11c1.38,0,2.5-1.12,2.5-2.5V4h3V2h-4v4.51C16.58,6.19,16.07,6,15.5,6C14.12,6,13,7.12,13,8.5 C13,9.88,14.12,11,15.5,11z');
        $l1I1->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M9.74,15.96l-1.41,1.41l-0.71-0.71l0.35-0.35c0.98-0.98,0.98-2.56,0-3.54c-0.49-0.49-1.13-0.73-1.77-0.73 c-0.64,0-1.28,0.24-1.77,0.73c-0.98,0.98-0.98,2.56,0,3.54l0.35,0.35l-1.06,1.06c-0.98,0.98-0.98,2.56,0,3.54 C4.22,21.76,4.86,22,5.5,22s1.28-0.24,1.77-0.73l1.06-1.06l1.41,1.41l1.41-1.41l-1.41-1.41l1.41-1.41L9.74,15.96z M5.85,14.2 c0.12-0.12,0.26-0.15,0.35-0.15s0.23,0.03,0.35,0.15c0.19,0.2,0.19,0.51,0,0.71l-0.35,0.35L5.85,14.9 C5.66,14.71,5.66,14.39,5.85,14.2z M5.85,19.85C5.73,19.97,5.59,20,5.5,20s-0.23-0.03-0.35-0.15c-0.19-0.19-0.19-0.51,0-0.71 l1.06-1.06l0.71,0.71L5.85,19.85z');
        $l1I1->addChild($l2I6);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
