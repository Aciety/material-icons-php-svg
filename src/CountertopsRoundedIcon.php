<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class CountertopsRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18,10l0-2.83c0-1.62-1.22-3.08-2.84-3.17c-1.21-0.06-2.27,0.59-2.8,1.57C12.01,6.22,12.53,7,13.27,7h0.01 c0.34,0,0.68-0.16,0.84-0.46C14.28,6.22,14.62,6,15,6c0.55,0,1,0.45,1,1v3H8c1.1,0,2-0.9,2-2V5c0-0.55-0.45-1-1-1H5 C4.45,4,4,4.45,4,5v3c0,1.1,0.9,2,2,2H3c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h1v7c0,0.55,0.45,1,1,1h14c0.55,0,1-0.45,1-1v-7h1 c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H18z M13,18h-2v-6h2V18z');
        $doc->addChild($l0I1);
    }
}
