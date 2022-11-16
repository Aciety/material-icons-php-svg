<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class WindPowerSharpIcon extends SVG
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGRect(x: '4', y: '3', width: '6', height: '2');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGRect(x: '1', y: '7', width: '5', height: '2');
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGGroup();
        $l3I0 = new SVGRect(x: '3', y: '19', width: '5', height: '2');
        $l2I2->addChild($l3I0);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M15.32,12.09l5.42-9.04L17.32,1L12,5.97v4.74c0.31-0.13,0.64-0.21,1-0.21C14.06,10.5,14.96,11.16,15.32,12.09z');
        $l2I3->addChild($l3I0);
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M10.5,13c0-0.82,0.4-1.54,1.01-2H1v4l7,2l3.44-2.06C10.87,14.48,10.5,13.79,10.5,13z');
        $l2I4->addChild($l3I0);
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M20.17,23L23,20.17l-3.54-6.36l-3.98-1c0,0.06,0.02,0.12,0.02,0.19c0,1.38-1.12,2.5-2.5,2.5c-0.36,0-0.69-0.08-1-0.21V21 c-1.1,0-2,0.9-2,2h6c0-1.1-0.9-2-2-2v-4.17L20.17,23z');
        $l2I5->addChild($l3I0);
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGGroup();
        $l3I0 = new SVGCircle(cx: '13', cy: '13', r: '1.5');
        $l2I6->addChild($l3I0);
        $l1I0->addChild($l2I6);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
