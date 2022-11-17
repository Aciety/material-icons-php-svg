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
    categories: ['navigation'],
    tags: ['architecture', 'building', 'estate', 'home', 'place', 'real', 'residence', 'residential', 'shelter', 'work'],
)]
final class HomeWorkTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M17,11h2v2h-2v2h2v2h-2v2h4V5h-9v1.4l5,3.57V11z M17,7h2v2h-2V7z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[10, 3], [10, 4.97], [10.96, 5.66], [12, 6.4], [12, 5], [21, 5], [21, 19], [17, 19], [17, 21], [23, 21], [23, 3]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[3, 12], [3, 19], [5, 19], [5, 14], [11, 14], [11, 19], [13, 19], [13, 12], [8, 8.5]]);
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '17', y: '7', width: '2', height: '2');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '17', y: '11', width: '2', height: '2');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGRect(x: '17', y: '15', width: '2', height: '2');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M1,11v10h6v-5h2v5h6V11L8,6L1,11z M13,19h-2v-5H5v5H3v-7l5-3.5l5,3.5V19z');
        $l1I0->addChild($l2I6);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
