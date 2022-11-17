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
    tags: ['[offline]', 'disabled', 'enabled', 'key', 'lock', 'off', 'on', 'password', 'slash', 'unlock'],
)]
final class KeyOffOutlinedIcon extends SVG
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
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M10.7,13.53l-1.71-1.71C9,11.88,9,11.94,9,12c0,1.1-0.9,2-2,2s-2-0.9-2-2s0.9-2,2-2c0.06,0,0.12,0,0.18,0.01L5.47,8.3 C4.02,8.9,3,10.33,3,12c0,2.21,1.79,4,4,4C8.67,16,10.1,14.98,10.7,13.53z M12.19,15.02C11.15,16.8,9.21,18,7,18 c-3.31,0-6-2.69-6-6c0-2.21,1.2-4.15,2.98-5.19L1.39,4.22l1.41-1.41l18.38,18.38l-1.41,1.41L12.19,15.02z M16.26,13.43l1.24-0.93 l1.81,1.36L21.17,12l-1-1l-6.34,0l-2-2L21,9l0,0l3,3l-4.5,4.5l-0.69-0.51L16.26,13.43z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
