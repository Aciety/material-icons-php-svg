<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['places'],
    tags: ['architecture', 'estate', 'gite', 'home', 'hostel', 'house', 'maps', 'place', 'real', 'residence', 'residential', 'stay', 'traveling'],
)]
final class GiteRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21.41,9.41l-2.83-2.83C18.21,6.21,17.7,6,17.17,6H9V5c0-0.55-0.45-1-1-1S7,4.45,7,5v1H6.83C6.3,6,5.79,6.21,5.41,6.59 L2.59,9.41C2.21,9.79,2,10.3,2,10.83V17c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2v-6.17C22,10.3,21.79,9.79,21.41,9.41z M14,17H4v-5h10 V17z M20,17h-4v-6.17l2-2l2,2V17z');
        $doc->addChild($l0I1);
    }
}
