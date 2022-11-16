<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SingleBedRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M18,10V7c0-1.1-0.9-2-2-2H8C6.9,5,6,5.9,6,7v3c-1.1,0-2,0.9-2,2v5h1.33l0.51,1.53C5.94,18.81,6.2,19,6.5,19h0 c0.3,0,0.56-0.19,0.66-0.47L7.67,17h8.67l0.51,1.53C16.94,18.81,17.2,19,17.5,19l0,0c0.3,0,0.56-0.19,0.66-0.47L18.67,17H20v-5 C20,10.9,19.1,10,18,10z M11,10H8V8c0-0.55,0.45-1,1-1h2V10z M16,10h-3V7h2c0.55,0,1,0.45,1,1V10z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
