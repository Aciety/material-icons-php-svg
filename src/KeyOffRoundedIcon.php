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
final class KeyOffRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M12.83,10l4.09,4.09L17,14l1.29,1.29c0.39,0.39,1.03,0.39,1.42,0l2.59-2.61c0.39-0.39,0.39-1.03-0.01-1.42l-0.99-0.97 C21.1,10.1,20.85,10,20.59,10H12.83z M19.07,21.9c0.39,0.39,1.02,0.39,1.41,0s0.39-1.02,0-1.41L3.51,3.51 c-0.39-0.39-1.02-0.39-1.41,0c-0.39,0.39-0.39,1.02,0,1.41l1.88,1.88C2.2,7.85,1,9.79,1,12c0,3.31,2.69,6,6,6 c2.21,0,4.15-1.2,5.18-2.99L19.07,21.9z M9.91,12.74C9.58,14.03,8.4,15,7,15c-1.65,0-3-1.35-3-3c0-1.4,0.97-2.58,2.26-2.91 L9.91,12.74z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
