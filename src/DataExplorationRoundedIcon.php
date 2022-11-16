<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class DataExplorationRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22,12c0-5.52-4.48-10-10-10S2,6.48,2,12c0,1.33,0.26,2.61,0.74,3.77l4.61-4.62c0.37-0.37,0.95-0.39,1.35-0.06l2.6,2.19 L14.58,10H14c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1h3c0.55,0,1,0.45,1,1v3c0,0.55-0.45,1-1,1s-1-0.45-1-1v-0.58l-3.94,3.93 c-0.37,0.37-0.96,0.39-1.35,0.05l-2.59-2.19l-4.4,4.4C5.52,20.26,8.56,22,12,22h8c1.1,0,2-0.9,2-2V12z M19.5,20.5 c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S20.05,20.5,19.5,20.5z');
        $doc->addChild($l0I1);
    }
}
