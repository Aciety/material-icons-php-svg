<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ForestIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[16, 12], [9, 2], [2, 12], [3.86, 12], [0, 18], [7, 18], [7, 22], [11, 22], [11, 18], [18, 18], [14.14, 12]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[20.14, 12], [22, 12], [15, 2], [12.61, 5.41], [17.92, 13], [16, 13], [15.97, 13], [19.19, 18], [24, 18]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '13', y: '19', width: '4', height: '3');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
