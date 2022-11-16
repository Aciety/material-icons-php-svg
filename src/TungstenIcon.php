<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class TungstenIcon extends SVG
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
        $l2I0 = new SVGRect(x: '11', y: '19', width: '2', height: '3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '2', y: '11', width: '3', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '19', y: '11', width: '3', height: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '16.66', y: '16.66', width: '1.99', height: '3');
        $l2I3->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -7.6665 17.8014)');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '4.85', y: '17.16', width: '3', height: '1.99');
        $l2I4->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -10.9791 9.8041)');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M15,8.02V3H9v5.02C7.79,8.94,7,10.37,7,12c0,2.76,2.24,5,5,5s5-2.24,5-5C17,10.37,16.21,8.94,15,8.02z M11,5h2v2.1 C12.68,7.04,12.34,7,12,7s-0.68,0.04-1,0.1V5z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
