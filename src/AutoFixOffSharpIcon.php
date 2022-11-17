<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['auto', 'disabled', 'edit', 'enabled', 'erase', 'fix', 'magic', 'modify', 'off', 'on', 'slash', 'star', 'stars', 'wand'],
)]
final class AutoFixOffSharpIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[20, 7], [20.94, 4.94], [23, 4], [20.94, 3.06], [20, 1], [19.06, 3.06], [17, 4], [19.06, 4.94]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[14.17, 8.42], [15.58, 9.83], [14.12, 11.29], [15.54, 12.71], [18.41, 9.83], [14.17, 5.59], [11.29, 8.460000000000001], [12.71, 9.880000000000001]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[1.39, 4.22], [8.460000000000001, 11.29], [1.59, 18.17], [5.83, 22.41], [12.71, 15.54], [19.78, 22.61], [21.19, 21.19], [2.81, 2.81]]);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
