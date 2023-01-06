<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['-', 'cancel', 'close', 'destination', 'direction', 'exit', 'highway', 'maps', 'minus', 'new', 'no', 'remove', 'road', 'stop', 'street', 'symbol', 'traffic', 'x'],
)]
final class RemoveRoadIcon extends SvgIcon
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
        $l2I0 = new SVGRect(x: '18', y: '4', width: '2', height: '9');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '4', y: '4', width: '2', height: '16');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '11', y: '4', width: '2', height: '4');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '11', y: '10', width: '2', height: '4');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '11', y: '16', width: '2', height: '4');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPolygon(points: [[22.5, 16.41], [21.09, 15], [19, 17.09], [16.91, 15], [15.5, 16.41], [17.59, 18.5], [15.5, 20.59], [16.91, 22], [19, 19.91], [21.09, 22], [22.5, 20.59], [20.41, 18.5]]);
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
