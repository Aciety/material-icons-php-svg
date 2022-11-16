<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class HouseSidingRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19,12h1.7c0.46,0,0.68-0.57,0.33-0.87L12.67,3.6c-0.38-0.34-0.96-0.34-1.34,0l-8.36,7.53C2.63,11.43,2.84,12,3.3,12H5v7 c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-1h10v1c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1V12z M7.21,10h9.58L17,10.19V12H7v-1.81 L7.21,10z M14.57,8H9.43L12,5.69L14.57,8z M7,16v-2h10v2H7z');
        $doc->addChild($l0I1);
    }
}
