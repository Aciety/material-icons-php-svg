<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SwipeVerticalRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M0,12c0,3.22,1.13,6.18,3.02,8.5H1.75C1.34,20.5,1,20.84,1,21.25S1.34,22,1.75,22H5c0.55,0,1-0.45,1-1v-3.25 C6,17.34,5.66,17,5.25,17c-0.41,0-0.75,0.34-0.75,0.75v2.16c-1.86-2.11-3-4.88-3-7.91s1.14-5.79,3-7.91v2.16 C4.5,6.66,4.84,7,5.25,7C5.66,7,6,6.66,6,6.25V3c0-0.55-0.45-1-1-1H1.75C1.34,2,1,2.34,1,2.75S1.34,3.5,1.75,3.5h1.27 C1.13,5.82,0,8.78,0,12z M8.83,19.1c-0.26-0.6,0.09-1.28,0.73-1.41l3.58-0.71L8.79,7.17c-0.34-0.76,0-1.64,0.76-1.98 c0.76-0.34,1.64,0,1.98,0.76l2.43,5.49l0.84-0.37c0.28-0.13,0.59-0.18,0.9-0.17l4.56,0.21c0.86,0.04,1.6,0.63,1.83,1.45l1.23,4.33 c0.27,0.96-0.2,1.97-1.11,2.37l-5.63,2.49c-0.48,0.21-1.26,0.33-1.76,0.14l-5.45-2.27C9.13,19.53,8.93,19.34,8.83,19.1z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
