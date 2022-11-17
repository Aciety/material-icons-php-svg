<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['bee', 'honey', 'honeycomb'],
)]
final class HiveTwoToneIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[5.92, 7], [4.79, 9], [5.92, 11], [8.06, 11], [9.19, 9], [8.06, 7]]);
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[10.94, 16], [9.800000000000001, 18.02], [10.92, 20], [13.08, 20], [14.2, 18.02], [13.06, 16]]);
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[13.06, 14], [14.19, 12], [13.06, 10], [10.94, 10], [9.81, 12], [10.94, 14]]);
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[5.92, 13], [4.79, 15], [5.92, 17], [8.06, 17], [9.19, 15], [8.06, 13]]);
        $l2I3->setStyle('opacity', '.3');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPolygon(points: [[15.94, 7], [14.81, 9], [15.94, 11], [18.08, 11], [19.21, 9], [18.08, 7]]);
        $l2I4->setStyle('opacity', '.3');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPolygon(points: [[10.92, 4], [9.800000000000001, 5.98], [10.94, 8], [13.06, 8], [14.2, 5.98], [13.08, 4]]);
        $l2I5->setStyle('opacity', '.3');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPolygon(points: [[15.94, 13], [14.81, 15], [15.94, 17], [18.08, 17], [19.21, 15], [18.08, 13]]);
        $l2I6->setStyle('opacity', '.3');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGPath(d: 'M21.5,9l-2.25-4h-3.31l-1.69-3h-4.5L8.06,5H4.75L2.5,9l1.69,3L2.5,15l2.25,4h3.31l1.69,3h4.5l1.69-3h3.31l2.25-4l-1.69-3 L21.5,9z M8.06,17H5.92l-1.12-2l1.12-2h2.14l1.12,2L8.06,17z M8.06,11H5.92L4.79,9l1.12-2h2.14l1.12,2L8.06,11z M13.08,20h-2.16 L9.8,18.02L10.94,16h2.12l1.13,2.02L13.08,20z M9.81,12l1.12-2h2.12l1.12,2l-1.12,2h-2.12L9.81,12z M13.06,8h-2.12L9.8,5.98 L10.92,4h2.16l1.12,1.98L13.06,8z M18.08,17h-2.14l-1.12-2l1.12-2h2.14l1.12,2L18.08,17z M18.08,11h-2.14l-1.12-2l1.12-2h2.14 l1.12,2L18.08,11z');
        $l1I0->addChild($l2I7);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
