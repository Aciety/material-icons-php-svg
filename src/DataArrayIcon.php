<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['array', 'brackets', 'code', 'coder', 'data', 'parentheses'],
)]
final class DataArrayIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[15, 4], [15, 6], [18, 6], [18, 18], [15, 18], [15, 20], [20, 20], [20, 4]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[4, 20], [9, 20], [9, 18], [6, 18], [6, 6], [9, 6], [9, 4], [4, 4]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
