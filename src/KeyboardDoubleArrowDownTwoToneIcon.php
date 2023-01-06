<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['arrow', 'arrows', 'direction', 'double', 'down', 'multiple', 'navigation'],
)]
final class KeyboardDoubleArrowDownTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[18, 6.41], [16.59, 5], [12, 9.58], [7.41, 5], [6, 6.41], [12, 12.41]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[18, 13], [16.59, 11.59], [12, 16.17], [7.41, 11.59], [6, 13], [12, 19]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
