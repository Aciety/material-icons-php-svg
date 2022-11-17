<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['automobile', 'car', 'cars', 'maps', 'repair', 'transportation', 'vehicle'],
)]
final class CarRepairOutlinedIcon extends SVG
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
        $l3I0 = new SVGCircle(cx: '9', cy: '10.5', r: '1');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGCircle(cx: '15', cy: '10.5', r: '1');
        $l2I0->addChild($l3I1);
        $l3I2 = new SVGPath(d: 'M5.78,16h0.44C6.65,16,7,15.64,7,15.19V14h10v1.19c0,0.45,0.34,0.81,0.78,0.81h0.44c0.43,0,0.78-0.36,0.78-0.81v-6.5 c0,0-1.34-4.03-1.56-4.69c-0.05-0.16-0.12-0.29-0.19-0.4c-0.02-0.02-0.03-0.04-0.05-0.07C16.82,3.01,16.28,3,16.28,3H7.72 c0,0-0.54,0.01-0.92,0.54C6.78,3.56,6.77,3.58,6.75,3.6C6.68,3.71,6.61,3.84,6.56,4C6.34,4.66,5,8.69,5,8.69v6.5 C5,15.64,5.35,16,5.78,16z M8.33,5h7.34l0.23,0.69L16.33,7H7.67L8.33,5z M7,9.01V9h10v0.01V12H7V9.01z');
        $l2I0->addChild($l3I2);
        $l3I3 = new SVGPolygon(points: [[4, 17.01], [4, 19], [11, 19], [11, 22], [13, 22], [13, 19], [20, 19], [20, 17.01]]);
        $l2I0->addChild($l3I3);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
