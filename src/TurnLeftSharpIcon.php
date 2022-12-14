<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['arrow', 'arrows', 'direction', 'directions', 'left', 'maps', 'navigation', 'path', 'route', 'sign', 'traffic', 'turn'],
)]
final class TurnLeftSharpIcon extends SvgIcon
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
        $l1I0 = new SVGPolygon(points: [[6.83, 11], [8.41, 12.59], [7, 14], [3, 10], [7, 6], [8.41, 7.41], [6.83, 9], [17, 9], [17, 20], [15, 20], [15, 11]]);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
