<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class FlashlightOffTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[16, 7], [9.83, 7], [14, 11.17], [14, 10.4], [16, 7.39]]);
        $l3I0->setStyle('opacity', '.3');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGPolygon(points: [[10, 12.83], [10, 20], [14, 20], [14, 16.83]]);
        $l3I1->setStyle('opacity', '.3');
        $l2I0->addChild($l3I1);
        $l3I2 = new SVGPolygon(points: [[16, 5], [16, 4], [6.83, 4], [7.83, 5]]);
        $l3I2->setStyle('opacity', '.3');
        $l2I0->addChild($l3I2);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M2.81,2.81L1.39,4.22L8,10.83V22h8v-3.17l3.78,3.78l1.41-1.41L2.81,2.81z M14,20h-4v-7.17l4,4V20z');
        $l2I1->addChild($l3I0);
        $l3I1 = new SVGPolygon(points: [[16, 4], [16, 5], [7.83, 5], [9.83, 7], [16, 7], [16, 7.39], [14, 10.4], [14, 11.17], [16, 13.17], [16, 11], [18, 8], [18, 2], [6, 2], [6, 3.17], [6.83, 4]]);
        $l2I1->addChild($l3I1);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
