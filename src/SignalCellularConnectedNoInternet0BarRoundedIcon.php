<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class SignalCellularConnectedNoInternet0BarRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21,18L21,18c0.55,0,1-0.45,1-1v-6c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1v6C20,17.55,20.45,18,21,18z M21,22L21,22 c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1v0C20,21.55,20.45,22,21,22z M18,20v2H2L22,2v6h-2V6.83L6.83,20H18z');
        $doc->addChild($l0I1);
    }
}
