<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['places'],
    tags: ['architecture', 'balcony', 'doors', 'estate', 'home', 'house', 'maps', 'out', 'outside', 'place', 'real', 'residence', 'residential', 'stay', 'terrace', 'window'],
)]
final class BalconyRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20,14.27V10c0-4.42-3.58-8-8-8s-8,3.58-8,8v4.27C3.4,14.61,3,15.26,3,16v4c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2v-4 C21,15.26,20.6,14.61,20,14.27z M7,20H5v-4h2V20z M11,20H9v-4h2V20z M11,14H6v-4c0-2.97,2.16-5.44,5-5.92V14z M13,4.08 c2.84,0.48,5,2.94,5,5.92v4h-5V4.08z M15,20h-2v-4h2V20z M19,20h-2v-4h2V20z M8,11c0-0.55,0.45-1,1-1s1,0.45,1,1s-0.45,1-1,1 S8,11.55,8,11z M16,11c0,0.55-0.45,1-1,1s-1-0.45-1-1s0.45-1,1-1S16,10.45,16,11z');
        $doc->addChild($l0I1);
    }
}
