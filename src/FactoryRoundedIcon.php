<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class FactoryRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M14,10V8.48c0-0.71-0.71-1.19-1.37-0.93L9,9V8.52C9,7.8,8.27,7.31,7.61,7.6L3.21,9.48C2.48,9.8,2,10.52,2,11.32V20 c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V10H14z M9,17c0,0.55-0.45,1-1,1s-1-0.45-1-1v-2c0-0.55,0.45-1,1-1s1,0.45,1,1V17z M13,17 c0,0.55-0.45,1-1,1s-1-0.45-1-1v-2c0-0.55,0.45-1,1-1s1,0.45,1,1V17z M17,17c0,0.55-0.45,1-1,1s-1-0.45-1-1v-2c0-0.55,0.45-1,1-1 s1,0.45,1,1V17z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M20.12,2h-1.23c-0.51,0-0.93,0.38-0.99,0.88L17.2,8.5h4.6l-0.69-5.62C21.05,2.38,20.62,2,20.12,2z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
