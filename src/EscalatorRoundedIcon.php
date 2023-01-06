<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: ['down', 'escalator', 'staircase', 'up'],
)]
final class EscalatorRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2l0-14C21,3.9,20.1,3,19,3z M17,9h-1.7l-4.71,8.49 C10.41,17.8,10.07,18,9.71,18H7c-0.83,0-1.5-0.67-1.5-1.5S6.17,15,7,15h1.7l4.71-8.49C13.59,6.2,13.93,6,14.29,6H17 c0.83,0,1.5,0.67,1.5,1.5S17.83,9,17,9z');
        $l1I1->addChild($l2I0);
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
