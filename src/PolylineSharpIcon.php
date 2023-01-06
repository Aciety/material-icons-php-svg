<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['compose', 'create', 'design', 'draw', 'line', 'polyline', 'vector'],
)]
final class PolylineSharpIcon extends SvgIcon
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
        $l1I0 = new SVGPolygon(points: [[15, 16], [15, 17.26], [9, 14.26], [9, 11.09], [11.7, 8], [16, 8], [16, 2], [10, 2], [10, 6.9], [7.3, 10], [3, 10], [3, 16], [8, 16], [15, 19.5], [15, 22], [21, 22], [21, 16]]);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
