<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['[offline]', 'code', 'disabled', 'enabled', 'key', 'lock', 'network', 'off', 'on', 'passcode', 'password', 'slash', 'unlock', 'vpn'],
)]
final class VpnKeyOffIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M20.83,18H21v-4h2v-4H12.83L20.83,18z M19.78,22.61l1.41-1.41L2.81,2.81L1.39,4.22l2.59,2.59C2.2,7.85,1,9.79,1,12 c0,3.31,2.69,6,6,6c2.21,0,4.15-1.2,5.18-2.99L19.78,22.61z M8.99,11.82C9,11.88,9,11.94,9,12c0,1.1-0.9,2-2,2s-2-0.9-2-2 s0.9-2,2-2c0.06,0,0.12,0,0.18,0.01L8.99,11.82z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
