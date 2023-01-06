<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['bakery', 'bread', 'breakfast', 'butter', 'dining', 'food', 'toast'],
)]
final class BreakfastDiningSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M17.85,3L6.14,3C4.15,3,2.36,4.39,2.05,6.36C1.78,8.11,2.64,9.65,4,10.45V21h16V10.45c1.36-0.79,2.23-2.36,1.95-4.11 C21.63,4.38,19.83,3,17.85,3z M16.41,13L12,17.42L7.59,13L12,8.59L16.41,13z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
