<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class GrassSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,20H2v-2h5.75l0,0C7.02,15.19,4.81,12.99,2,12.26C2.64,12.1,3.31,12,4,12C8.42,12,12,15.58,12,20z M22,12.26 C21.36,12.1,20.69,12,20,12c-2.93,0-5.48,1.58-6.88,3.93c0.29,0.66,0.53,1.35,0.67,2.07c0.13,0.65,0.2,1.32,0.2,2h2h6v-2h-5.75 C16.98,15.19,19.19,12.99,22,12.26z M15.64,11.02c0.78-2.09,2.23-3.84,4.09-5C15.44,6.16,12,9.67,12,14c0,0.01,0,0.02,0,0.02 C12.95,12.75,14.2,11.72,15.64,11.02z M11.42,8.85C10.58,6.66,8.88,4.89,6.7,4C8.14,5.86,9,8.18,9,10.71c0,0.21-0.03,0.41-0.04,0.61 c0.43,0.24,0.83,0.52,1.22,0.82C10.39,10.96,10.83,9.85,11.42,8.85z');
        $doc->addChild($l0I1);
    }
}
