<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['arrow', 'data', 'disabled', 'down', 'enabled', 'internet', 'mobile', 'network', 'off', 'on', 'slash', 'speed', 'up', 'wifi', 'wireless'],
)]
final class MobiledataOffSharpIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[16, 7], [19, 7], [15, 3], [11, 7], [14, 7], [14, 11.17], [16, 13.17]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[2.81, 2.81], [1.39, 4.22], [8, 10.83], [8, 17.01], [5, 17.02], [9, 21], [13, 17], [10, 17.01], [10, 12.83], [19.78, 22.61], [21.19, 21.19]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
