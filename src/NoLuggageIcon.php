<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class NoLuggageIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12.75,9v0.92l1.75,1.75V9H16v4.17l3,3V8c0-1.1-0.9-2-2-2h-2V3c0-0.55-0.45-1-1-1h-4C9.45,2,9,2.45,9,3v3H8.83l3,3H12.75z M10.5,3.5h3V6h-3V3.5z M21.19,21.19L2.81,2.81L1.39,4.22l3.63,3.63C5.02,7.9,5,7.95,5,8v11c0,1.1,0.9,2,2,2c0,0.55,0.45,1,1,1 c0.55,0,1-0.45,1-1h6c0,0.55,0.45,1,1,1s1-0.45,1-1c0.34,0,0.65-0.09,0.93-0.24l1.85,1.85L21.19,21.19z M8,18v-7.17l1.5,1.5V18H8z M12.75,18h-1.5v-3.92l1.5,1.5V18z');
        $doc->addChild($l0I1);
    }
}
