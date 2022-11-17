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
    categories: ['image'],
    tags: ['adjust', 'auto', 'edit', 'editing', 'enhance', 'fix', 'high', 'pen', 'stars', 'tool'],
)]
final class AutoFixHighTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGRect(x: '3.64', y: '14.29', width: '10.14', height: '2');
        $l2I0->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -8.2634 10.636)');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[20, 7], [20.94, 4.94], [23, 4], [20.94, 3.06], [20, 1], [19.06, 3.06], [17, 4], [19.06, 4.94]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[8.5, 7], [9.44, 4.94], [11.5, 4], [9.44, 3.06], [8.5, 1], [7.56, 3.06], [5.5, 4], [7.56, 4.94]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[20, 12.5], [19.06, 14.56], [17, 15.5], [19.06, 16.44], [20, 18.5], [20.94, 16.44], [23, 15.5], [20.94, 14.56]]);
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M17.71,9.12l-2.83-2.83C14.68,6.1,14.43,6,14.17,6c-0.26,0-0.51,0.1-0.71,0.29L2.29,17.46c-0.39,0.39-0.39,1.02,0,1.41 l2.83,2.83C5.32,21.9,5.57,22,5.83,22s0.51-0.1,0.71-0.29l11.17-11.17C18.1,10.15,18.1,9.51,17.71,9.12z M5.83,19.59l-1.41-1.41 L11.59,11L13,12.41L5.83,19.59z M14.41,11L13,9.59l1.17-1.17l1.41,1.41L14.41,11z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
