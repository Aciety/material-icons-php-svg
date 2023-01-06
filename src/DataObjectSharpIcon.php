<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['brackets', 'code', 'coder', 'data', 'object', 'parentheses'],
)]
final class DataObjectSharpIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[4, 10], [2, 10], [2, 14], [4, 14], [4, 20], [10, 20], [10, 18], [6, 18], [6, 12.5], [4, 12.5], [4, 11.5], [6, 11.5], [6, 6], [10, 6], [10, 4], [4, 4]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[20, 10], [20, 4], [14, 4], [14, 6], [18, 6], [18, 11.5], [20, 11.5], [20, 12.5], [18, 12.5], [18, 18], [14, 18], [14, 20], [20, 20], [20, 14], [22, 14], [22, 10]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
