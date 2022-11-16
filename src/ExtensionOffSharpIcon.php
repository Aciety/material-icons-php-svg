<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class ExtensionOffSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19.78,22.61l-1.63-1.63C18.1,20.98,18.05,21,18,21h-3.8c0-2.71-2.16-3-2.7-3s-2.7,0.29-2.7,3H3v-5.8c2.71,0,3-2.16,3-2.7 c0-0.54-0.3-2.7-2.99-2.7V6c0-0.05,0.02-0.09,0.02-0.14L1.39,4.22l1.41-1.41l18.38,18.38L19.78,22.61z M20,17.17V15 c1.38,0,2.5-1.12,2.5-2.5S21.38,10,20,10V4h-6c0-1.38-1.12-2.5-2.5-2.5S9,2.62,9,4H6.83L20,17.17z');
        $doc->addChild($l0I1);
    }
}
