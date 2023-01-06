<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['architecture', 'automobile', 'building', 'car', 'cars', 'direction', 'emoji', 'estate', 'maps', 'place', 'public', 'real', 'residence', 'residential', 'shelter', 'transportation', 'travel', 'vehicle'],
)]
final class EmojiTransportationTwoToneIcon extends SvgIcon
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
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M20.57,10.66C20.43,10.26,20.05,10,19.6,10h-7.19c-0.46,0-0.83,0.26-0.98,0.66L10,14.77l0.01,5.51 c0,0.38,0.31,0.72,0.69,0.72h0.62C11.7,21,12,20.62,12,20.24V19h8v1.24c0,0.38,0.31,0.76,0.69,0.76h0.61 c0.38,0,0.69-0.34,0.69-0.72L22,18.91v-4.14L20.57,10.66z M12.41,11h7.19l1.03,3h-9.25L12.41,11z M12,17c-0.55,0-1-0.45-1-1 s0.45-1,1-1s1,0.45,1,1S12.55,17,12,17z M20,17c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S20.55,17,20,17z');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[14, 9], [15, 9], [15, 3], [7, 3], [7, 8], [2, 8], [2, 21], [3, 21], [3, 9], [8, 9], [8, 4], [14, 4]]);
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGRect(x: '5', y: '11', width: '2', height: '2');
        $l1I1->addChild($l2I2);
        $l2I3 = new SVGRect(x: '10', y: '5', width: '2', height: '2');
        $l1I1->addChild($l2I3);
        $l2I4 = new SVGRect(x: '5', y: '15', width: '2', height: '2');
        $l1I1->addChild($l2I4);
        $l2I5 = new SVGRect(x: '5', y: '19', width: '2', height: '2');
        $l1I1->addChild($l2I5);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
