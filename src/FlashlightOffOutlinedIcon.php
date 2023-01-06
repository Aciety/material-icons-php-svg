<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['disabled', 'enabled', 'flash', 'flashlight', 'light', 'off', 'on', 'slash'],
)]
final class FlashlightOffOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M2.81,2.81L1.39,4.22L8,10.83V22h8v-3.17l3.78,3.78l1.41-1.41L2.81,2.81z M14,20h-4v-7.17l4,4V20z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[16, 4], [16, 5], [7.83, 5], [9.83, 7], [16, 7], [16, 7.39], [14, 10.4], [14, 11.17], [16, 13.17], [16, 11], [18, 8], [18, 2], [6, 2], [6, 3.17], [6.83, 4]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
