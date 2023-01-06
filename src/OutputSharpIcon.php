<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: [],
)]
final class OutputSharpIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[17, 17], [22, 12], [17, 7], [15.59, 8.41], [18.17, 11], [9, 11], [9, 13], [18.17, 13], [15.59, 15.59]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[19, 19], [5, 19], [5, 5], [19, 5], [19, 7], [21, 7], [21, 3], [3, 3], [3, 21], [21, 21], [21, 17], [19, 17]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
