<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class MobiledataOffOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[16, 6.82], [17.59, 8.41], [19, 7], [15, 3], [11, 7], [12.41, 8.41], [14, 6.82], [14, 11.17], [16, 13.17]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[1.39, 4.22], [8, 10.83], [8, 17.18], [6.41, 15.59], [5, 17], [9, 21], [13, 17], [11.59, 15.59], [10, 17.18], [10, 12.83], [19.78, 22.61], [21.19, 21.19], [2.81, 2.81]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
