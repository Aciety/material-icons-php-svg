<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['arrow', 'arrows', 'direction', 'directions', 'maps', 'navigation', 'path', 'right', 'route', 'sharp', 'sign', 'slight', 'traffic', 'turn'],
)]
final class TurnSlightRightSharpIcon extends SvgIcon
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
        $l1I0 = new SVGPolygon(points: [[12.34, 6], [12.34, 4], [18, 4], [18, 9.66], [16, 9.66], [16, 7.41], [11, 12.41], [11, 20], [9, 20], [9, 11.59], [14.59, 6]]);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
