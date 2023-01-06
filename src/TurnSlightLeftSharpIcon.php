<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['arrow', 'arrows', 'direction', 'directions', 'maps', 'navigation', 'path', 'right', 'route', 'sign', 'slight', 'traffic', 'turn'],
)]
final class TurnSlightLeftSharpIcon extends SvgIcon
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
        $l1I0 = new SVGPolygon(points: [[11.66, 6], [11.66, 4], [6, 4], [6, 9.66], [8, 9.66], [8, 7.41], [13, 12.41], [13, 20], [15, 20], [15, 11.59], [9.41, 6]]);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
