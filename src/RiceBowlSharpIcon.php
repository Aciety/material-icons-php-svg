<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['places'],
    tags: ['bowl', 'dinner', 'food', 'lunch', 'meal', 'restaurant', 'rice'],
)]
final class RiceBowlSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22,12L22,12c0-5.52-4.48-10-10-10S2,6.48,2,12c0,3.69,2.47,6.86,6,8.25V22h8v-1.75C19.53,18.86,22,15.69,22,12z M20,12h-4 V5.08C18.39,6.47,20,9.05,20,12z M14,4.26V12h-4V4.26C10.64,4.1,11.31,4,12,4S13.36,4.1,14,4.26z M4,12c0-2.95,1.61-5.53,4-6.92V12 H4z');
        $doc->addChild($l0I1);
    }
}
