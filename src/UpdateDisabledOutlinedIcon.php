<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrow', 'back', 'backwards', 'clock', 'date', 'disabled', 'enabled', 'forward', 'history', 'load', 'off', 'on', 'refresh', 'reverse', 'rotate', 'schedule', 'slash', 'time', 'update'],
)]
final class UpdateDisabledOutlinedIcon extends SvgIcon
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
        $l0I1 = new SVGPath(d: 'M20.94,13c-0.15,1.38-0.62,2.67-1.33,3.79l-1.47-1.47c0.38-0.71,0.65-1.49,0.77-2.32H20.94z M8.67,5.84 C9.66,5.31,10.8,5,12,5c2.37,0,4.47,1.19,5.74,3H15v2h6V4h-2v2.36C17.35,4.32,14.83,3,12,3c-1.76,0-3.4,0.51-4.78,1.39L8.67,5.84z M11,7v1.17l2,2V7H11z M19.78,22.61l-3-3C15.39,20.48,13.76,21,12,21c-4.97,0-9-4.03-9-9c0-1.76,0.51-3.4,1.39-4.78L1.39,4.22 l1.41-1.41l18.38,18.38L19.78,22.61z M15.32,18.15L5.84,8.67C5.31,9.66,5,10.8,5,12c0,3.86,3.14,7,7,7 C13.2,19,14.34,18.69,15.32,18.15z');
        $doc->addChild($l0I1);
    }
}
