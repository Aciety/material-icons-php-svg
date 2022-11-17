<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['auto', 'disabled', 'edit', 'enabled', 'erase', 'fix', 'magic', 'modify', 'off', 'on', 'slash', 'star', 'stars', 'wand'],
)]
final class AutoFixOffRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M22,3.55l-1.06-0.49L20.45,2c-0.18-0.39-0.73-0.39-0.91,0l-0.49,1.06L18,3.55c-0.39,0.18-0.39,0.73,0,0.91l1.06,0.49 L19.55,6c0.18,0.39,0.73,0.39,0.91,0l0.49-1.06L22,4.45C22.39,4.28,22.39,3.72,22,3.55z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M14.17,8.42l1.41,1.41l-1.46,1.46l1.41,1.41l2.17-2.17c0.39-0.39,0.39-1.02,0-1.41l-2.83-2.83 c-0.39-0.39-1.02-0.39-1.41,0l-2.17,2.17l1.41,1.41L14.17,8.42z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M2.1,4.93l6.36,6.36l-6.17,6.17c-0.39,0.39-0.39,1.02,0,1.41l2.83,2.83c0.39,0.39,1.02,0.39,1.41,0l6.17-6.17l6.36,6.36 c0.39,0.39,1.02,0.39,1.41,0h0c0.39-0.39,0.39-1.02,0-1.41L3.51,3.51c-0.39-0.39-1.02-0.39-1.41,0l0,0 C1.71,3.91,1.71,4.54,2.1,4.93z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
