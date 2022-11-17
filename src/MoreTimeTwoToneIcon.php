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
    categories: ['communication'],
    tags: ['+', 'add', 'clock', 'date', 'more', 'new', 'plus', 'schedule', 'symbol', 'time'],
)]
final class MoreTimeTwoToneIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[10, 8], [10, 14], [14.7, 16.9], [15.5, 15.7], [11.5, 13.3], [11.5, 8]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M17.92,12c0.05,0.33,0.08,0.66,0.08,1c0,3.9-3.1,7-7,7s-7-3.1-7-7c0-3.9,3.1-7,7-7c0.7,0,1.37,0.1,2,0.29V4.23 C12.36,4.08,11.69,4,11,4c-5,0-9,4-9,9s4,9,9,9s9-4,9-9c0-0.34-0.02-0.67-0.06-1H17.92z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[20, 5], [20, 2], [18, 2], [18, 5], [15, 5], [15, 7], [18, 7], [18, 10], [20, 10], [20, 7], [23, 7], [23, 5]]);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
