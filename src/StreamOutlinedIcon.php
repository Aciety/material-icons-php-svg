<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['content'],
    tags: ['cast', 'connected', 'feed', 'live', 'network', 'signal', 'stream', 'wireless'],
)]
final class StreamOutlinedIcon extends SVG
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
        $l2I0 = new SVGCircle(cx: '20', cy: '12', r: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '4', cy: '12', r: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '12', cy: '20', r: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '13.74', y: '6.13', width: '6.22', height: '2');
        $l2I3->setAttribute('transform', 'matrix(0.7081 -0.7061 0.7061 0.7081 -0.1146 13.9802)');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPolygon(points: [[8.32, 9.68], [8.630000000000001, 10], [10.05, 8.59], [6.03, 4.55], [6.02, 4.55], [5.71, 4.23], [4.29, 5.64], [8.31, 9.69]]);
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPolygon(points: [[15.41, 13.94], [14, 15.35], [17.99, 19.36], [18.34, 19.71], [19.76, 18.3], [15.77, 14.29]]);
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPolygon(points: [[8.59, 13.95], [4.56, 17.96], [4.24, 18.29], [5.65, 19.7], [9.68, 15.68], [10.01, 15.36]]);
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGCircle(cx: '12', cy: '4', r: '2');
        $l1I0->addChild($l2I7);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
