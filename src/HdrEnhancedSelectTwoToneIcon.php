<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['add', 'alphabet', 'character', 'dynamic', 'enhance', 'font', 'hdr', 'high', 'letter', 'plus', 'range', 'select', 'symbol', 'text', 'type'],
)]
final class HdrEnhancedSelectTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M12,4C9.79,4,8,5.79,8,8s1.79,4,4,4s4-1.79,4-4S14.21,4,12,4z M15,9h-2v2h-2V9H9V7h2V5h2v2h2V9z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,2C8.69,2,6,4.69,6,8s2.69,6,6,6s6-2.69,6-6S15.31,2,12,2z M12,12c-2.21,0-4-1.79-4-4s1.79-4,4-4s4,1.79,4,4 S14.21,12,12,12z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[13, 5], [11, 5], [11, 7], [9, 7], [9, 9], [11, 9], [11, 11], [13, 11], [13, 9], [15, 9], [15, 7], [13, 7]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[3.5, 18], [1.5, 18], [1.5, 16], [0, 16], [0, 22], [1.5, 22], [1.5, 19.5], [3.5, 19.5], [3.5, 22], [5, 22], [5, 16], [3.5, 16]]);
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPolygon(points: [[22, 18.5], [22, 16.5], [20.5, 16.5], [20.5, 18.5], [18.5, 18.5], [18.5, 20], [20.5, 20], [20.5, 22], [22, 22], [22, 20], [24, 20], [24, 18.5]]);
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M16.5,16H13v6h1.5v-2h1.1l0.9,2H18l-0.9-2.1c0.5-0.3,0.9-0.8,0.9-1.4v-1C18,16.7,17.3,16,16.5,16z M16.5,18.5h-2v-1h2 V18.5z');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M10,16H6.5v6H10c0.8,0,1.5-0.7,1.5-1.5v-3C11.5,16.7,10.8,16,10,16z M10,20.5H8v-3h2V20.5z');
        $l1I0->addChild($l2I6);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
