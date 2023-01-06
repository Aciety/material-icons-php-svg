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
final class PanToolAltIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M19.98,14.82l-0.63,4.46C19.21,20.27,18.36,21,17.37,21h-6.16c-0.53,0-1.29-0.21-1.66-0.59L5,15.62l0.83-0.84 c0.24-0.24,0.58-0.35,0.92-0.28L10,15.24V4.5C10,3.67,10.67,3,11.5,3S13,3.67,13,4.5v6h0.91c0.31,0,0.62,0.07,0.89,0.21l4.09,2.04 C19.66,13.14,20.1,13.97,19.98,14.82z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
