<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class FlightClassRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16,4h-2c-1.1,0-2,0.9-2,2v5c0,1.1,0.9,2,2,2h2c1.1,0,2-0.9,2-2V6C18,4.9,17.1,4,16,4z M6,4c0.55,0,1,0.45,1,1v3l2.5,8H17 c0.55,0,1,0.45,1,1s-0.45,1-1,1H9.49c-0.88,0-1.66-0.58-1.92-1.43L5.08,8.28C5.03,8.09,5,7.9,5,7.71V5C5,4.45,5.45,4,6,4z M18,20 c0,0.55-0.45,1-1,1H9c-0.55,0-1-0.45-1-1s0.45-1,1-1h8C17.55,19,18,19.45,18,20z');
        $doc->addChild($l0I1);
    }
}
