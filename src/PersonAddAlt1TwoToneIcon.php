<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class PersonAddAlt1TwoToneIcon extends SVG
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
        $l2I0 = new SVGCircle(cx: '9', cy: '8', r: '2');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M9,16c-2.7,0-5.8,1.29-6,2h12C14.78,17.28,11.69,16,9,16z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M9,14c-2.67,0-8,1.34-8,4v2h16v-2C17,15.34,11.67,14,9,14z M3,18c0.2-0.71,3.3-2,6-2c2.69,0,5.78,1.28,6,2H3z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[20, 10], [20, 7], [18, 7], [18, 10], [15, 10], [15, 12], [18, 12], [18, 15], [20, 15], [20, 12], [23, 12], [23, 10]]);
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M9,12c2.21,0,4-1.79,4-4c0-2.21-1.79-4-4-4S5,5.79,5,8C5,10.21,6.79,12,9,12z M9,6c1.1,0,2,0.9,2,2c0,1.1-0.9,2-2,2 S7,9.1,7,8C7,6.9,7.9,6,9,6z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
