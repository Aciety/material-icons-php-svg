<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrow', 'arrows', 'chevron', 'collapse', 'direction', 'double', 'expand', 'expandable', 'inward', 'less', 'list', 'navigation', 'unfold', 'up'],
)]
final class UnfoldLessDoubleOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[16.58, 1.41], [15.16, 0], [11.99, 3.17], [8.82, 0], [7.41, 1.41], [11.99, 6]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[16.58, 6.41], [15.16, 5], [11.99, 8.17], [8.82, 5], [7.41, 6.41], [11.99, 11]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[7.42, 17.59], [8.84, 19], [12.01, 15.83], [15.18, 19], [16.59, 17.59], [12.01, 13]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[7.42, 22.59], [8.84, 24], [12.01, 20.83], [15.18, 24], [16.59, 22.59], [12.01, 18]]);
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
