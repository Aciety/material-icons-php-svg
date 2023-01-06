<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['arrow', 'more', 'read', 'text'],
)]
final class ReadMoreOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGRect(x: '13', y: '7', width: '9', height: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '13', y: '15', width: '9', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '16', y: '11', width: '6', height: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[13, 12], [8, 7], [8, 11], [2, 11], [2, 13], [8, 13], [8, 17]]);
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
