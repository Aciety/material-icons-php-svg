<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['[offline]', 'alt', 'disabled', 'edit', 'filter', 'funnel', 'off', 'options', 'refine', 'sift', 'slash'],
)]
final class FilterAltOffSharpIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[21.05, 4], [6.83, 4], [14.8, 11.97]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[2.81, 2.81], [1.39, 4.22], [10, 13], [10, 20], [14, 20], [14, 16.83], [19.78, 22.61], [21.19, 21.19]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
