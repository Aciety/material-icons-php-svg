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
    tags: ['cloud', 'lightning', 'rain', 'storm', 'thunder', 'thunderstorm', 'weather'],
)]
final class ThunderstormOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M17.92,7.02C17.45,4.18,14.97,2,12,2C9.82,2,7.83,3.18,6.78,5.06C4.09,5.41,2,7.74,2,10.5C2,13.53,4.47,16,7.5,16h10 c2.48,0,4.5-2.02,4.5-4.5C22,9.16,20.21,7.23,17.92,7.02z M17.5,14h-10C5.57,14,4,12.43,4,10.5c0-1.74,1.31-3.23,3.04-3.46 l0.99-0.13l0.49-0.87C9.23,4.78,10.56,4,12,4c1.94,0,3.63,1.44,3.95,3.35l0.25,1.52l1.54,0.14C19.01,9.13,20,10.22,20,11.5 C20,12.88,18.88,14,17.5,14z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[14.8, 17], [11.9, 20.32], [13.9, 21.32], [11.55, 24], [14.2, 24], [17.1, 20.68], [15.1, 19.68], [17.45, 17]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[8.800000000000001, 17], [5.9, 20.32], [7.9, 21.32], [5.55, 24], [8.199999999999999, 24], [11.1, 20.68], [9.1, 19.68], [11.45, 17]]);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
