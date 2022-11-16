<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SwipeRightIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M19.98,16.82l-0.63,4.46C19.21,22.27,18.36,23,17.37,23h-6.16c-0.53,0-1.29-0.21-1.66-0.59L5,17.62l0.83-0.84 c0.24-0.24,0.58-0.35,0.92-0.28L10,17.24V6.5C10,5.67,10.67,5,11.5,5S13,5.67,13,6.5v6h0.91c0.31,0,0.62,0.07,0.89,0.21l4.09,2.04 C19.66,15.14,20.1,15.97,19.98,16.82z M19.91,5.5H17V7h5V2h-1.5v2.02C18.18,2.13,15.22,1,12,1C6.51,1,2.73,4.12,2,7h1.57 C4.33,5.02,7.26,2.5,12,2.5C15.03,2.5,17.79,3.64,19.91,5.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
