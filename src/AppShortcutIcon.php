<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class AppShortcutIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M17,18H7V6h10v1h2V3c0-1.1-0.9-2-2-2H7C5.9,1,5,1.9,5,3v18c0,1.1,0.9,2,2,2h10c1.1,0,2-0.9,2-2v-4h-2V18z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[20.38, 9.619999999999999], [21, 11], [21.62, 9.619999999999999], [23, 9], [21.62, 8.380000000000001], [21, 7], [20.38, 8.380000000000001], [19, 9]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[16, 8], [14.75, 10.75], [12, 12], [14.75, 13.25], [16, 16], [17.25, 13.25], [20, 12], [17.25, 10.75]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[21, 13], [20.38, 14.38], [19, 15], [20.38, 15.62], [21, 17], [21.62, 15.62], [23, 15], [21.62, 14.38]]);
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
