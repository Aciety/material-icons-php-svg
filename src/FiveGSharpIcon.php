<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class FiveGSharpIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[17, 13], [19, 13], [19, 15], [14, 15], [14, 9], [21, 9], [21, 7], [12, 7], [12, 17], [21, 17], [21, 11], [17, 11]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[3, 13], [8, 13], [8, 15], [3, 15], [3, 17], [10, 17], [10, 11], [5, 11], [5, 9], [10, 9], [10, 7], [3, 7]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
