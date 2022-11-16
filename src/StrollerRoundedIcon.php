<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class StrollerRoundedIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M18,20c0,1.1-0.9,2-2,2s-2-0.9-2-2s0.9-2,2-2S18,18.9,18,20z M6,18c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S7.1,18,6,18z M14.3,4.1C13.03,3.4,11.56,3,10,3C8.49,3,7.07,3.38,5.83,4.03C5.24,4.34,5.15,5.15,5.61,5.61l3.99,3.99L14.3,4.1z M21.94,5.83 C21.65,4.22,20.3,3,18.65,3c-1.66,0-2.54,1.27-3.18,2.03L6.71,15.31c-0.55,0.65-0.09,1.65,0.76,1.65H15c1.1,0,2-0.9,2-2V6.27 C17.58,5.59,17.97,5,18.65,5c0.68,0,1.22,0.52,1.33,1.21l0,0C20.08,6.66,20.48,7,20.96,7c0.55,0,1-0.45,1-1 C21.96,5.94,21.95,5.89,21.94,5.83L21.94,5.83z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
