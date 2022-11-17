<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['arrow', 'arrows', 'direction', 'double', 'multiple', 'navigation', 'up'],
)]
final class KeyboardDoubleArrowUpOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[6, 17.59], [7.41, 19], [12, 14.42], [16.59, 19], [18, 17.59], [12, 11.59]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[6, 11], [7.41, 12.41], [12, 7.83], [16.59, 12.41], [18, 11], [12, 5]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
