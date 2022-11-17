<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['female', 'gender', 'girl', 'lady', 'social', 'symbol', 'woman', 'women'],
)]
final class FemaleRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,6c1.93,0,3.5,1.57,3.5,3.5S13.93,13,12,13s-3.5-1.57-3.5-3.5S10.07,6,12,6z M13,14.91c2.56-0.47,4.5-2.71,4.5-5.41 C17.5,6.46,15.04,4,12,4S6.5,6.46,6.5,9.5c0,2.7,1.94,4.94,4.5,5.41V17h-1c-0.55,0-1,0.45-1,1s0.45,1,1,1h1v1c0,0.55,0.45,1,1,1 s1-0.45,1-1v-1h1c0.55,0,1-0.45,1-1s-0.45-1-1-1h-1V14.91z');
        $doc->addChild($l0I1);
    }
}
