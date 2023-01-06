<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['home'],
    tags: ['eco', 'energy', 'heat', 'nest', 'power', 'solar', 'sun', 'sunny'],
)]
final class SolarPowerIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[3.33, 16], [11, 16], [11, 13], [4, 13]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[13, 16], [20.67, 16], [20, 13], [13, 13]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[21.11, 18], [13, 18], [13, 22], [22, 22]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[2, 22], [11, 22], [11, 18], [2.89, 18]]);
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '11', y: '8', width: '2', height: '3');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGRect(x: '16.53', y: '6.06', width: '2', height: '3');
        $l2I5->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -0.2089 14.6085)');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGRect(x: '4.97', y: '6.56', width: '3', height: '2');
        $l2I6->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -3.448 6.7885)');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGRect(x: '3', y: '2', width: '3', height: '2');
        $l1I0->addChild($l2I7);
        $l2I8 = new SVGRect(x: '18', y: '2', width: '3', height: '2');
        $l1I0->addChild($l2I8);
        $l2I9 = new SVGPath(d: 'M12,7c2.76,0,5-2.24,5-5H7C7,4.76,9.24,7,12,7z');
        $l1I0->addChild($l2I9);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
