<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class CompressTwoToneIcon extends SVG
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
        $l2I0 = new SVGRect(x: '4', y: '9', width: '16', height: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[16, 4], [13, 4], [13, 1], [11, 1], [11, 4], [8, 4], [12, 8]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[8, 19], [11, 19], [11, 22], [13, 22], [13, 19], [16, 19], [12, 15]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '4', y: '12', width: '16', height: '2');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
