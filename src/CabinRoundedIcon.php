<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['places'],
    tags: ['architecture', 'cabin', 'camping', 'cottage', 'estate', 'home', 'house', 'log', 'maps', 'place', 'real', 'residence', 'residential', 'stay', 'traveling', 'wood'],
)]
final class CabinRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M4.37,3.55C4.89,2.62,5.87,2,7,2c0.38,0,0.72-0.22,0.89-0.53C8.04,1.16,8.39,1,8.73,1c0.74,0,1.26,0.8,0.9,1.45 C9.11,3.38,8.13,4,7,4C6.62,4,6.28,4.22,6.11,4.53C5.96,4.84,5.61,5,5.27,5C4.53,5,4.01,4.2,4.37,3.55z M22.39,12.19 c-0.34,0.44-0.96,0.52-1.4,0.19L20,11.62V20c0,0.55-0.45,1-1,1H5c-0.55,0-1-0.45-1-1v-8.38l-0.99,0.76 c-0.44,0.34-1.07,0.25-1.4-0.19c-0.33-0.44-0.25-1.07,0.19-1.4L4,9.11V7c0-0.55,0.45-1,1-1s1,0.45,1,1v0.58l5.39-4.12 c0.36-0.27,0.86-0.27,1.21,0l9.6,7.33C22.64,11.13,22.73,11.76,22.39,12.19z M10.06,7h3.89L12,5.52L10.06,7z M6,10.1V11h12v-0.9 L16.56,9H7.44L6,10.1z M6,13v2h12v-2H6z M18,19v-2H6v2H18z');
        $doc->addChild($l0I1);
    }
}
