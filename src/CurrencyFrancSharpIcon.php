<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class CurrencyFrancSharpIcon extends SVG
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
        $l1I0 = new SVGPolygon(points: [[18, 5], [18, 3], [7, 3], [7, 16], [5, 16], [5, 18], [7, 18], [7, 21], [9, 21], [9, 18], [13, 18], [13, 16], [9, 16], [9, 13], [17, 13], [17, 11], [9, 11], [9, 5]]);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
