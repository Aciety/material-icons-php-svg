<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['arrow', 'arrows', 'direction', 'double', 'multiple', 'navigation', 'right'],
)]
final class DoubleArrowTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[15.5, 5], [11, 5], [16, 12], [11, 19], [15.5, 19], [20.5, 12]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[8.5, 5], [4, 5], [9, 12], [4, 19], [8.5, 19], [13.5, 12]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
