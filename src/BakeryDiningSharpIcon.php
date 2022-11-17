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
    tags: ['bakery', 'bread', 'breakfast', 'brunch', 'croissant', 'dining', 'food'],
)]
final class BakeryDiningSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[16.36, 7.58], [15.5, 16.99], [17, 16.99], [20.16, 9.1]]);
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[3.84, 9.1], [7, 16.99], [8.5, 16.99], [7.64, 7.58]]);
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[10, 16.99], [14, 16.99], [15, 6], [9, 6]]);
        $l2I2->addChild($l3I0);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[20.32, 12.75], [18.51, 17.25], [20.46, 18.21], [22.52, 16.99]]);
        $l2I3->addChild($l3I0);
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[1.48, 16.99], [3.54, 18.21], [5.49, 17.25], [3.68, 12.75]]);
        $l2I4->addChild($l3I0);
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
