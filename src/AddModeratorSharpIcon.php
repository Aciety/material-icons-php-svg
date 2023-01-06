<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['+', 'add', 'certified', 'moderator', 'new', 'plus', 'privacy', 'private', 'protect', 'protection', 'security', 'shield', 'symbol', 'verified'],
)]
final class AddModeratorSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M17,10c1.08,0,2.09,0.25,3,0.68V5l-8-3L4,5v6.09c0,5.05,3.41,9.76,8,10.91c0.03-0.01,0.05-0.02,0.08-0.02 C10.8,20.71,10,18.95,10,17C10,13.13,13.13,10,17,10z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M17,12c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5S19.76,12,17,12z M20,17.5h-2.5V20h-1v-2.5H14v-1h2.5V14h1v2.5H20V17.5z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
