<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['car', 'games', 'kids', 'toy', 'toys', 'windmill'],
)]
final class ToysSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('display', 'inline');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l0I0->setStyle('display', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M18.72,10l-2-6H7.28L5.81,8.4L4.41,7l1-1L4,4.59L0.59,8L2,9.41l1-1L4.59,10H2v8h2.18C4.59,19.16,5.7,20,7,20 c1.3,0,2.4-0.84,2.82-2h4.37c0.41,1.16,1.51,2,2.82,2c1.3,0,2.41-0.84,2.82-2H22v-8H18.72z M7,18c-0.55,0-1-0.45-1-1s0.45-1,1-1 s1,0.45,1,1S7.55,18,7,18z M11,10H7.41L7.39,9.98L8.72,6c0,0,0,0,0,0H11V10z M13,10V6h2.28l1.33,4H13z M17,18c-0.55,0-1-0.45-1-1 s0.45-1,1-1s1,0.45,1,1S17.55,18,17,18z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
