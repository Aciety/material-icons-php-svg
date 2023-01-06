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
final class AddModeratorRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M17,10c1.08,0,2.09,0.25,3,0.68v-4.3c0-0.83-0.52-1.58-1.3-1.87l-6-2.25c-0.45-0.17-0.95-0.17-1.4,0l-6,2.25 C4.52,4.81,4,5.55,4,6.39v4.7c0,5.05,3.41,9.76,8,10.91c0.03-0.01,0.05-0.02,0.08-0.02C10.8,20.71,10,18.95,10,17 C10,13.13,13.13,10,17,10z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M17,12c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5S19.76,12,17,12z M19.5,17.5h-2v2c0,0.28-0.22,0.5-0.5,0.5 s-0.5-0.22-0.5-0.5v-2h-2c-0.28,0-0.5-0.22-0.5-0.5s0.22-0.5,0.5-0.5h2v-2c0-0.28,0.22-0.5,0.5-0.5s0.5,0.22,0.5,0.5v2h2 c0.28,0,0.5,0.22,0.5,0.5S19.78,17.5,19.5,17.5z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
