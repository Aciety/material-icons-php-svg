<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class WbTwilightIcon extends SVG
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
        $l2I0 = new SVGRect(x: '17.22', y: '7.31', width: '3', height: '2');
        $l2I0->setAttribute('transform', 'matrix(0.7069 -0.7074 0.7074 0.7069 -0.3887 15.676)');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '2', y: '18', width: '20', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '11', y: '4', width: '2', height: '3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '4.31', y: '6.78', width: '2', height: '3');
        $l2I3->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -4.2992 6.1783)');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M5,16h14c0-3.87-3.13-7-7-7S5,12.13,5,16z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
