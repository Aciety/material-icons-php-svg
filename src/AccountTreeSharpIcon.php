<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['account', 'analytics', 'chart', 'connect', 'data', 'diagram', 'flow', 'graph', 'infographic', 'measure', 'metrics', 'process', 'square', 'statistics', 'structure', 'tracking', 'tree'],
)]
final class AccountTreeSharpIcon extends SvgIcon
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
        $l0I1 = new SVGPolygon(points: [[22, 11], [22, 3], [15, 3], [15, 6], [9, 6], [9, 3], [2, 3], [2, 11], [9, 11], [9, 8], [11, 8], [11, 18], [15, 18], [15, 21], [22, 21], [22, 13], [15, 13], [15, 16], [13, 16], [13, 8], [15, 8], [15, 11]]);
        $doc->addChild($l0I1);
    }
}
