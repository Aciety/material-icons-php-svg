<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class AddChartTwoToneIcon extends SVG
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
        $l2I0 = new SVGRect(x: '11', y: '7', width: '2', height: '10');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '15', y: '13', width: '2', height: '4');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M19,19H5V5h9V3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2v-9h-2V19z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '7', y: '10', width: '2', height: '7');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPolygon(points: [[19, 5], [19, 3], [17, 3], [17, 5], [15, 5], [15, 7], [17, 7], [17, 9], [19, 9], [19, 7], [21, 7], [21, 5]]);
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}