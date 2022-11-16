<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class DeckIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[22, 9], [12, 2], [2, 9], [11, 9], [11, 22], [13, 22], [13, 9]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[4.14, 12], [2.18, 12.37], [3, 16.74], [3, 22], [5, 22], [5.02, 18], [7, 18], [7, 22], [9, 22], [9, 16], [4.9, 16]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[19.1, 16], [15, 16], [15, 22], [17, 22], [17, 18], [18.98, 18], [19, 22], [21, 22], [21, 16.74], [21.82, 12.37], [19.86, 12]]);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
