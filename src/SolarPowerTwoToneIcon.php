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
final class SolarPowerTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[4.44, 20], [11, 20], [11, 18], [4.84, 18]]);
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[18.36, 14], [13, 14], [13, 16], [18.76, 16]]);
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[13, 18], [13, 20], [19.56, 20], [19.16, 18]]);
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[5.24, 16], [11, 16], [11, 14], [5.64, 14]]);
        $l2I3->setStyle('opacity', '.3');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M20,12H4L2,22h20L20,12z M13,14h5.36l0.4,2H13V14z M11,20H4.44l0.4-2H11V20z M11,16H5.24l0.4-2H11V16z M13,20v-2h6.16 l0.4,2H13z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGRect(x: '11', y: '8', width: '2', height: '3');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGRect(x: '16.53', y: '6.06', width: '2', height: '3');
        $l2I6->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -0.2089 14.6085)');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGRect(x: '4.97', y: '6.56', width: '3', height: '2');
        $l2I7->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -3.448 6.7885)');
        $l1I0->addChild($l2I7);
        $l2I8 = new SVGRect(x: '3', y: '2', width: '3', height: '2');
        $l1I0->addChild($l2I8);
        $l2I9 = new SVGRect(x: '18', y: '2', width: '3', height: '2');
        $l1I0->addChild($l2I9);
        $l2I10 = new SVGPath(d: 'M12,7c2.76,0,5-2.24,5-5h-2c0,1.65-1.35,3-3,3S9,3.65,9,2H7C7,4.76,9.24,7,12,7z');
        $l1I0->addChild($l2I10);
        $l2I11 = new SVGPath(d: 'M15,2c0,1.66-1.34,3-3,3S9,3.66,9,2H15z');
        $l2I11->setStyle('opacity', '.3');
        $l1I0->addChild($l2I11);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
