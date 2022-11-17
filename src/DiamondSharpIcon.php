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
    tags: ['diamond', 'fashion', 'gems', 'jewelry', 'logo', 'retail', 'valuable', 'valuables'],
)]
final class DiamondSharpIcon extends SVG
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[12.16, 3], [11.84, 3], [9.210000000000001, 8.25], [14.79, 8.25]]);
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[16.46, 8.25], [21.62, 8.25], [19, 3], [13.84, 3]]);
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[21.38, 9.75], [12.75, 9.75], [12.75, 20.1]]);
        $l2I2->addChild($l3I0);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[11.25, 20.1], [11.25, 9.75], [2.62, 9.75]]);
        $l2I3->addChild($l3I0);
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[7.54, 8.25], [10.16, 3], [5, 3], [2.38, 8.25]]);
        $l2I4->addChild($l3I0);
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
