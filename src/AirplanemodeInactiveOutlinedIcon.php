<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['airplane', 'airplanemode', 'airport', 'disabled', 'enabled', 'flight', 'fly', 'inactive', 'maps', 'mode', 'off', 'offline', 'on', 'slash', 'transportation', 'travel'],
)]
final class AirplanemodeInactiveOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M10.5,7.67V3.5C10.5,2.67,11.17,2,12,2c0.83,0,1.5,0.67,1.5,1.5V9l8.5,5v2l-4.49-1.32L10.5,7.67z M19.78,22.61l1.41-1.41 L13.5,13.5L9.56,9.56L2.81,2.81L1.39,4.22l6.38,6.38L2,14v2l8.5-2.5V19L8,20.5L8,22l4-1l4,1l0-1.5L13.5,19v-2.67L19.78,22.61z');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
