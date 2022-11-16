<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class TapasRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22,10V2c0-0.55-0.45-1-1-1h-6c-0.55,0-1,0.45-1,1v8c0,1.86,1.28,3.41,3,3.86V21h-1c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1 h4c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h-1v-7.14C20.72,13.41,22,11.86,22,10z M20,3v3h-4V3H20z M9.86,9L8,9V8l1.86,0 c1.31,0,2.5-0.94,2.63-2.24C12.64,4.26,11.47,3,10,3H8V2c0-0.55-0.45-1-1-1h0C6.45,1,6,1.45,6,2v1L4.14,3 c-1.31,0-2.5,0.94-2.63,2.24C1.36,6.74,2.53,8,4,8h2v1L4.14,9c-1.31,0-2.5,0.94-2.63,2.24C1.36,12.74,2.53,14,4,14h2v8 c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-8h2c1.47,0,2.64-1.26,2.49-2.76C12.36,9.94,11.17,9,9.86,9z');
        $doc->addChild($l0I1);
    }
}
