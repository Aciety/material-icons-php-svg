<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['crisis', 'disaster', 'natural', 'rain', 'storm', 'weather'],
)]
final class LandslideIcon extends SvgIcon
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[15.47, 13.79], [12.89, 12.76], [6, 15.05], [2, 13.51], [2, 15.61], [6, 16.95]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[10.57, 11.42], [8, 8], [2, 8], [2, 11.61], [6, 12.95]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[6, 19.05], [2, 17.72], [2, 22], [22, 22], [17.03, 15.38]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[17, 6], [17, 1], [12, 0], [9, 2], [9, 6], [12, 8]]);
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPolygon(points: [[18.5, 7], [16, 9], [16, 12], [18.5, 14], [23, 12], [23, 8]]);
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
