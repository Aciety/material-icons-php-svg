<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrow', 'arrows', 'compress', 'enlarge', 'expand', 'grow', 'move', 'push', 'together'],
)]
final class ExpandOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGRect(x: '4', y: '20', width: '16', height: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '4', y: '2', width: '16', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[9.41, 13.59], [8, 15], [12, 19], [16, 15], [14.59, 13.59], [13, 15.17], [13, 8.83], [14.59, 10.41], [16, 9], [12, 5], [8, 9], [9.41, 10.41], [11, 8.83], [11, 15.17]]);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
