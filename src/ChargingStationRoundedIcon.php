<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ChargingStationRoundedIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M17,1H7C5.9,1,5,1.9,5,3v18c0,1.1,0.9,2,2,2h10c1.1,0,2-0.9,2-2V3C19,1.9,18.1,1,17,1z M17,18H7V6h10V18z M12.5,11V9.12 c0-0.53-0.71-0.7-0.95-0.22l-1.69,3.38C9.7,12.61,9.94,13,10.31,13h1.19v1.88c0,0.53,0.71,0.7,0.95,0.22l1.69-3.38 C14.3,11.39,14.06,11,13.69,11H12.5z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
