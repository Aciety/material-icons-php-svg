<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['fingers', 'gesture', 'hand', 'hands', 'human', 'move', 'pan', 'scan', 'stop', 'tool'],
)]
final class PanToolAltSharpIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M20.18,13.4L19.1,21h-9L5,15.62l1.22-1.23L10,15.24V4.5C10,3.67,10.67,3,11.5,3S13,3.67,13,4.5v6h1.38L20.18,13.4z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
