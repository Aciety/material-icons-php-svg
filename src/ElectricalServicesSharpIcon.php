<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['charge', 'cord', 'electric', 'electrical', 'plug', 'power', 'services', 'wire'],
)]
final class ElectricalServicesSharpIcon extends SvgIcon
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
        $l2I0 = new SVGRect(x: '18', y: '13', width: '3', height: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[12, 12], [12, 14], [10, 14], [10, 18], [12, 18], [12, 20], [17, 20], [17, 12]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[5, 11], [12, 11], [12, 4], [4, 4], [4, 6], [10, 6], [10, 9], [3, 9], [3, 17], [9, 17], [9, 15], [5, 15]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '18', y: '17', width: '3', height: '2');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
