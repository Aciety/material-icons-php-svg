<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['adjust', 'auto', 'awesome', 'edit', 'editing', 'enhance', 'stars'],
)]
final class AutoAwesomeOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[19, 9], [20.25, 6.25], [23, 5], [20.25, 3.75], [19, 1], [17.75, 3.75], [15, 5], [17.75, 6.25]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[19, 15], [17.75, 17.75], [15, 19], [17.75, 20.25], [19, 23], [20.25, 20.25], [23, 19], [20.25, 17.75]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M11.5,9.5L9,4L6.5,9.5L1,12l5.5,2.5L9,20l2.5-5.5L17,12L11.5,9.5z M9.99,12.99L9,15.17l-0.99-2.18L5.83,12l2.18-0.99 L9,8.83l0.99,2.18L12.17,12L9.99,12.99z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
