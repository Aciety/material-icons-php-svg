<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class AppRegistrationIcon extends SVG
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
        $l2I4 = new SVGPolygon(points: [[14, 12.42], [14, 10], [10, 10], [10, 14], [12.42, 14]]);
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M20.88,11.29l-1.17-1.17c-0.16-0.16-0.42-0.16-0.58,0L18.25,11L20,12.75l0.88-0.88C21.04,11.71,21.04,11.45,20.88,11.29z');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPolygon(points: [[11, 18.25], [11, 20], [12.75, 20], [19.42, 13.33], [17.67, 11.58]]);
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGRect(x: '16', y: '4', width: '4', height: '4');
        $l1I0->addChild($l2I7);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
