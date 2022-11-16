<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class FourKPlusOutlinedIcon extends SVG
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,11.5h-1.5V10h-1v1.5H15v1h1.5 V14h1v-1.5H19V19H5V5h14V11.5z');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGPolygon(points: [[8.5, 15], [10, 15], [10, 13.5], [11, 13.5], [11, 12], [10, 12], [10, 9], [8.5, 9], [8.5, 12], [7, 12], [7, 9], [5.5, 9], [5.5, 13.5], [8.5, 13.5]]);
        $l2I0->addChild($l3I1);
        $l3I2 = new SVGPolygon(points: [[13, 12.75], [14.75, 15], [16.5, 15], [14.25, 12], [16.5, 9], [14.75, 9], [13, 11.25], [13, 9], [11.5, 9], [11.5, 15], [13, 15]]);
        $l2I0->addChild($l3I2);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
