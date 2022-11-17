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
    tags: ['cancel', 'close', 'destination', 'direction', 'exit', 'location', 'maps', 'no', 'pin', 'place', 'quit', 'remove', 'stop', 'wrong', 'x'],
)]
final class WrongLocationTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M18,11c0,0.07,0,0.13,0,0.2c0,2.34-1.95,5.44-6,9.14c-4.05-3.7-6-6.79-6-9.14C6,7.57,8.65,5,12,5c0.34,0,0.68,0.03,1,0.08 V3.06C12.67,3.02,12.34,3,12,3c-4.2,0-8,3.22-8,8.2c0,3.32,2.67,7.25,8,11.8c5.33-4.55,8-8.48,8-11.8c0-0.07,0-0.13,0-0.2H18z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '12', cy: '11', r: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[22.54, 2.88], [21.12, 1.46], [19, 3.59], [16.88, 1.46], [15.46, 2.88], [17.59, 5], [15.46, 7.12], [16.88, 8.539999999999999], [19, 6.41], [21.12, 8.539999999999999], [22.54, 7.12], [20.41, 5]]);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
