<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['arrow', 'arrows', 'direction', 'directions', 'maps', 'navigation', 'path', 'route', 'sign', 'straight', 'traffic', 'up'],
)]
final class StraightOutlinedIcon extends SVG
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
        $l1I0 = new SVGPolygon(points: [[11, 6.83], [9.41, 8.41], [8, 7], [12, 3], [16, 7], [14.59, 8.41], [13, 6.83], [13, 21], [11, 21]]);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
