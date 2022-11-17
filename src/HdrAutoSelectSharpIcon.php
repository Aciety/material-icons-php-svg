<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['+', 'A', 'alphabet', 'auto', 'camera', 'character', 'circle', 'dynamic', 'font', 'hdr', 'high', 'letter', 'photo', 'range', 'select', 'symbol', 'text', 'type'],
)]
final class HdrAutoSelectSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[3.5, 18], [1.5, 18], [1.5, 16], [0, 16], [0, 22], [1.5, 22], [1.5, 19.5], [3.5, 19.5], [3.5, 22], [5, 22], [5, 16], [3.5, 16]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M10,16H6.5v6H10c0.8,0,1.5-0.7,1.5-1.5v-3C11.5,16.7,10.8,16,10,16z M10,20.5H8v-3h2V20.5z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[22, 18.5], [22, 16.5], [20.5, 16.5], [20.5, 18.5], [18.5, 18.5], [18.5, 20], [20.5, 20], [20.5, 22], [22, 22], [22, 20], [24, 20], [24, 18.5]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M13,22h1.5v-2h1.1l0.9,2H18l-0.86-2H18v-4h-5V22z M14.5,17.5h2v1h-2V17.5z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPolygon(points: [[11.97, 5.3], [10.95, 8.19], [13.05, 8.19], [12.03, 5.3]]);
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M12,2C8.69,2,6,4.69,6,8s2.69,6,6,6s6-2.69,6-6S15.31,2,12,2z M14.04,11l-0.63-1.79h-2.83L9.96,11H8.74l2.63-7h1.25 l2.63,7H14.04z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
