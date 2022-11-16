<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class FactCheckOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M20,3H4C2.9,3,2,3.9,2,5v14c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V5 C22,3.9,21.1,3,20,3z M20,19H4V5h16V19z');
        $l2I0->setStyle('fill-rule', 'evenodd');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[19.41, 10.42], [17.99, 9], [14.82, 12.17], [13.41, 10.75], [12, 12.16], [14.82, 15]]);
        $l2I1->setStyle('fill-rule', 'evenodd');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '5', y: '7', width: '5', height: '2');
        $l2I2->setStyle('fill-rule', 'evenodd');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '5', y: '11', width: '5', height: '2');
        $l2I3->setStyle('fill-rule', 'evenodd');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '5', y: '15', width: '5', height: '2');
        $l2I4->setStyle('fill-rule', 'evenodd');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
