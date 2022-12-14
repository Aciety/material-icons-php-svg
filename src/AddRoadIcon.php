<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['+', 'add', 'destination', 'direction', 'highway', 'maps', 'new', 'plus', 'road', 'stop', 'street', 'symbol', 'traffic'],
)]
final class AddRoadIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[20, 18], [20, 15], [18, 15], [18, 18], [15, 18], [15, 20], [18, 20], [18, 23], [20, 23], [20, 20], [23, 20], [23, 18]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '18', y: '4', width: '2', height: '9');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '4', y: '4', width: '2', height: '16');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '11', y: '4', width: '2', height: '4');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '11', y: '10', width: '2', height: '4');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGRect(x: '11', y: '16', width: '2', height: '4');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
