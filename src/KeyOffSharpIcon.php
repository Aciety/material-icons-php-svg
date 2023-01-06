<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['[offline]', 'disabled', 'enabled', 'key', 'lock', 'off', 'on', 'password', 'slash', 'unlock'],
)]
final class KeyOffSharpIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M16.91,14.09L17,14l2,2l4-4.04L21,10h-8.17L16.91,14.09z M3.98,6.81C2.2,7.85,1,9.79,1,12c0,3.31,2.69,6,6,6 c2.21,0,4.15-1.2,5.18-2.99l7.59,7.59l1.41-1.41L2.81,2.81L1.39,4.22L3.98,6.81z M9.91,12.74C9.58,14.03,8.4,15,7,15 c-1.65,0-3-1.35-3-3c0-1.4,0.97-2.58,2.26-2.91L9.91,12.74z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
