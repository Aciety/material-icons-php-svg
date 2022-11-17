<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['places'],
    tags: ['disabled', 'drink', 'enabled', 'fastfood', 'food', 'hamburger', 'meal', 'no', 'off', 'on', 'slash'],
)]
final class NoFoodRoundedIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M16,22c0,0.55-0.45,1-1,1H2c-0.55,0-1-0.45-1-1s0.45-1,1-1h13C15.55,21,16,21.45,16,22z M22.89,6.1 C22.95,5.51,22.49,5,21.9,5H18V2c0-0.55-0.45-1-1-1s-1,0.45-1,1v3h-3.9c-0.59,0-1.05,0.51-1,1.1l0.24,2.41L18,15.17l3.62,3.62 L22.89,6.1z M21.19,22.61c0.39-0.39,0.39-1.02,0-1.41L12,12L9.01,9.01h0l-6.2-6.2c-0.39-0.39-1.02-0.39-1.41,0l0,0 C1,3.2,1,3.83,1.39,4.22l4.99,4.99c-2.56,0.54-4.76,2.08-5.28,4.63C0.99,14.45,1.49,15,2.1,15l10.07,0l2,2H2c-0.55,0-1,0.45-1,1 s0.45,1,1,1h13c0.32,0,0.59-0.16,0.78-0.4l4,4C20.17,23,20.8,23,21.19,22.61L21.19,22.61z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
