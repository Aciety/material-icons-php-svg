<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['disabled', 'enabled', 'nearby', 'off', 'on', 'slash'],
)]
final class NearbyOffRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M21.41,13.42L18.83,16l-1.81-1.81L19.2,12L12,4.8L9.81,6.99L8,5.17l2.58-2.58c0.78-0.78,2.05-0.78,2.83,0l8,8 C22.2,11.37,22.2,12.63,21.41,13.42z M20.48,21.9L20.48,21.9c-0.39,0.39-1.02,0.39-1.41,0L16,18.83l-2.58,2.58 c-0.78,0.78-2.05,0.78-2.83,0l-8-8c-0.78-0.78-0.78-2.05,0-2.83L5.17,8L2.1,4.93c-0.39-0.39-0.39-1.02,0-1.41l0,0 c0.39-0.39,1.02-0.39,1.41,0l16.98,16.97C20.87,20.87,20.87,21.51,20.48,21.9z M14.19,17.02l-1.39-1.39l-0.09,0.09 c-0.39,0.39-1.02,0.39-1.42,0l-3.01-3.01c-0.39-0.39-0.39-1.02,0-1.41l0.09-0.09l-1.4-1.39L4.8,12l7.2,7.2L14.19,17.02z M15.71,11.29l-3.01-3.01c-0.39-0.39-1.02-0.39-1.41,0L11.2,8.38l4.42,4.42l0.09-0.09C16.1,12.32,16.1,11.68,15.71,11.29z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
