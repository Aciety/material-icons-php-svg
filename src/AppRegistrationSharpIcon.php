<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class AppRegistrationSharpIcon extends SVG
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
        $l2I0 = new SVGRect(x: '10', y: '4', width: '4', height: '4');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '4', y: '16', width: '4', height: '4');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '4', y: '10', width: '4', height: '4');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '4', y: '4', width: '4', height: '4');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '16', y: '4', width: '4', height: '4');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPolygon(points: [[11, 17.86], [11, 20], [13.1, 20], [19.08, 14.03], [16.96, 11.91]]);
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPolygon(points: [[14, 12.03], [14, 10], [10, 10], [10, 14], [12.03, 14]]);
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGRect(x: '18.44', y: '10.06', width: '2', height: '3');
        $l2I7->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -2.481 17.1312)');
        $l1I0->addChild($l2I7);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}