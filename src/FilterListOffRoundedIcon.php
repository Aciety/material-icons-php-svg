<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class FilterListOffRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M21,7c0-0.55-0.45-1-1-1H8.83l2,2H20C20.55,8,21,7.55,21,7z M18,12c0-0.55-0.45-1-1-1h-3.17l2,2H17 C17.55,13,18,12.55,18,12z M13.98,16.81C13.99,16.87,14,16.94,14,17c0,0.55-0.45,1-1,1h-2c-0.55,0-1-0.45-1-1s0.45-1,1-1h2 c0.06,0,0.13,0.01,0.19,0.02L10.17,13H7c-0.55,0-1-0.45-1-1s0.45-1,1-1h1.17l-3-3H4C3.45,8,3,7.55,3,7c0-0.32,0.15-0.6,0.38-0.79 L2.1,4.93c-0.39-0.39-0.39-1.02,0-1.41s1.02-0.39,1.41,0l16.97,16.97c0.39,0.39,0.39,1.02,0,1.41s-1.02,0.39-1.41,0L13.98,16.81z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
