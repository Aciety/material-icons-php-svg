<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class DesignServicesTwoToneIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[15.91, 9.279999999999999], [14.61, 7.98], [5, 17.59], [5, 19], [6.41, 19], [16.02, 9.390000000000001]]);
        $l2I0->setStyle('opacity', '.3');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[10.83, 8.93], [9.630000000000001, 7.73], [8.44, 8.92], [7.02, 7.5], [8.210000000000001, 6.32], [6.94, 5.04], [6.94, 5.04], [5.04, 6.94], [8.93, 10.83]]);
        $l2I1->setStyle('opacity', '.3');
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[16.27, 14.38], [15.07, 13.17], [13.17, 15.07], [17.06, 18.96], [18.96, 17.06], [17.69, 15.79], [16.5, 16.98], [15.08, 15.57]]);
        $l2I2->setStyle('opacity', '.3');
        $l1I1->addChild($l2I2);
        $l2I3 = new SVGRect(x: '16.44', y: '5.56', width: '2', height: '2');
        $l2I3->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 0.4645 14.2513)');
        $l2I3->setStyle('opacity', '.3');
        $l1I1->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M20.97,5.86l-2.83-2.83c-0.39-0.39-1.02-0.39-1.41,0l-4.49,4.49L8.35,3.63c-0.78-0.78-2.05-0.78-2.83,0l-1.9,1.9 c-0.78,0.78-0.78,2.05,0,2.83l3.89,3.89L3,16.76V21h4.24l4.52-4.52l3.89,3.89c0.95,0.95,2.23,0.6,2.83,0l1.9-1.9 c0.78-0.78,0.78-2.05,0-2.83l-3.89-3.89l4.49-4.49C21.36,6.88,21.36,6.25,20.97,5.86z M5.04,6.94l1.89-1.9c0,0,0,0,0,0l1.27,1.27 L7.02,7.5l1.41,1.41l1.19-1.19l1.2,1.2l-1.9,1.9L5.04,6.94z M6.41,19H5v-1.41l9.61-9.61l1.3,1.3l0.11,0.11L6.41,19z M16.5,16.98 l1.19-1.19l1.27,1.27l-1.9,1.9l-3.89-3.89l1.9-1.9l1.2,1.2l-1.19,1.19L16.5,16.98z M17.44,7.98l-1.41-1.41l1.41-1.41l1.41,1.41 L17.44,7.98z');
        $l1I1->addChild($l2I4);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
