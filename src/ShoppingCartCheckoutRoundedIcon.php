<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ShoppingCartCheckoutRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M7,18c-1.1,0-1.99,0.9-1.99,2S5.9,22,7,22s2-0.9,2-2S8.1,18,7,18z M17,18c-1.1,0-1.99,0.9-1.99,2s0.89,2,1.99,2s2-0.9,2-2 S18.1,18,17,18z M19,16c0-0.55-0.45-1-1-1H7l1.1-2h7.45c0.75,0,1.41-0.41,1.75-1.03l3.24-6.14c0.25-0.48,0.08-1.08-0.4-1.34 c-0.49-0.27-1.1-0.08-1.36,0.41L15.55,11H8.53L4.54,2.57C4.38,2.22,4.02,2,3.64,2H2C1.45,2,1,2.45,1,3s0.45,1,1,1h1l3.6,7.59 l-1.35,2.44C4.52,15.37,5.48,17,7,17h11C18.55,17,19,16.55,19,16z M11.29,2.71c0.39-0.39,1.02-0.39,1.41,0l2.59,2.59 c0.39,0.39,0.39,1.02,0,1.41l-2.59,2.59c-0.39,0.39-1.02,0.39-1.41,0c-0.39-0.39-0.39-1.02,0-1.41L12.17,7L9,7C8.45,7,8,6.55,8,6 c0-0.55,0.45-1,1-1l3.17,0l-0.88-0.88C10.9,3.73,10.9,3.1,11.29,2.71z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
