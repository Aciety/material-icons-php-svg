<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class HiveSharpIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[13.79, 8], [15.59, 5], [13.79, 2], [10.21, 2], [8.41, 5], [10.21, 8]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[10.21, 9], [8.41, 12], [10.21, 15], [13.79, 15], [15.59, 12], [13.79, 9]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[16.45, 11.51], [20.04, 11.51], [21.83, 8.51], [20.04, 5.51], [16.45, 5.51], [14.65, 8.51]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[20.04, 12.51], [16.45, 12.51], [14.65, 15.51], [16.45, 18.51], [20.04, 18.51], [21.83, 15.51]]);
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPolygon(points: [[7.55, 11.51], [9.35, 8.51], [7.55, 5.51], [3.96, 5.51], [2.17, 8.51], [3.96, 11.51]]);
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPolygon(points: [[7.55, 12.51], [3.96, 12.51], [2.17, 15.51], [3.96, 18.51], [7.55, 18.51], [9.35, 15.51]]);
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPolygon(points: [[10.21, 16], [8.41, 19], [10.21, 22], [13.79, 22], [15.59, 19], [13.79, 16]]);
        $l1I0->addChild($l2I6);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
