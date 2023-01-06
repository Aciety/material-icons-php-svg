<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['certified', 'disabled', 'enabled', 'moderator', 'off', 'on', 'privacy', 'private', 'protect', 'protection', 'remove', 'security', 'shield', 'slash', 'verified'],
)]
final class RemoveModeratorSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M20,11.09V5l-8-3L6.78,3.96l12.09,12.09C19.59,14.52,20,12.83,20,11.09z M2.81,2.81L1.39,4.22L4,6.83v4.26 c0,5.05,3.41,9.76,8,10.91c1.72-0.43,3.28-1.36,4.55-2.62l3.23,3.23l1.41-1.41L2.81,2.81z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
