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
    tags: ['crisis', 'disaster', 'natural', 'rain', 'storm', 'weather'],
)]
final class LandslideTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[8.57, 12.09], [7, 10], [4, 10], [4, 12.28], [6, 12.95]]);
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[12.53, 14.77], [9.949999999999999, 13.74], [6, 15.05], [4, 14.39], [4, 16.28], [6, 16.95]]);
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[15, 4.65], [15, 2.64], [12.42, 2.12], [11, 3.07], [11, 4.93], [12.23, 5.75]]);
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[6, 19.05], [4, 18.39], [4, 20], [18, 20], [15.03, 16.04]]);
        $l2I3->setStyle('opacity', '.3');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPolygon(points: [[18, 9.960000000000001], [18, 11.04], [18.8, 11.68], [21, 10.7], [21, 9.6], [19, 9.16]]);
        $l2I4->setStyle('opacity', '.3');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M11,12L8,8H2v14h20l-6-8L11,12z M4,10h3l1.57,2.09L6,12.95l-2-0.67V10z M4,14.39l2,0.67l3.95-1.32l2.58,1.03L6,16.95 l-2-0.67V14.39z M4,20v-1.61l2,0.67l9.03-3.01L18,20H4z');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M17,6V1l-5-1L9,2v4l3,2L17,6z M11,3.07l1.42-0.95L15,2.64v2.01l-2.77,1.11L11,4.93V3.07z');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGPath(d: 'M18.5,7L16,9v3l2.5,2l4.5-2V8L18.5,7z M21,10.7l-2.2,0.98L18,11.04V9.96l1-0.8l2,0.44V10.7z');
        $l1I0->addChild($l2I7);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
