<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['[offline]', 'code', 'disabled', 'enabled', 'key', 'lock', 'network', 'off', 'on', 'passcode', 'password', 'slash', 'unlock', 'vpn'],
)]
final class VpnKeyOffRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M3.98,6.81C2.2,7.85,1,9.79,1,12c0,3.31,2.69,6,6,6c2.21,0,4.15-1.2,5.18-2.99l6.89,6.89c0.39,0.39,1.02,0.39,1.41,0 c0.39-0.39,0.39-1.02,0-1.41L3.51,3.51c-0.39-0.39-1.02-0.39-1.41,0c-0.39,0.39-0.39,1.02,0,1.41L3.98,6.81z M8.99,11.82 C9,11.88,9,11.94,9,12c0,1.1-0.9,2-2,2s-2-0.9-2-2s0.9-2,2-2c0.06,0,0.12,0,0.18,0.01L8.99,11.82z M20.32,17.5 C20.74,17.13,21,16.59,21,16v-2c1.1,0,2-0.9,2-2s-0.9-2-2-2h-8.17L20.32,17.5');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
