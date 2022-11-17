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
    tags: ['axis', 'dash', 'horizontal', 'line', 'stroke', 'vertical'],
)]
final class LineAxisSharpIcon extends SVG
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
        $l1I0 = new SVGPolygon(points: [[22, 7.43], [20.59, 6.02], [16.56, 10.55], [9.5, 4], [2, 11.51], [3.5, 13.01], [9.640000000000001, 6.86], [15.23, 12.04], [13.5, 13.99], [9.5, 9.99], [2, 17.5], [3.5, 19], [9.5, 12.99], [13.5, 16.99], [16.69, 13.4], [20.59, 17.01], [22, 15.6], [18.02, 11.9]]);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
