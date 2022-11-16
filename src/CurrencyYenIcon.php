<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class CurrencyYenIcon extends SVG
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
        $l1I0 = new SVGPolygon(points: [[13.92, 11], [18, 11], [18, 13], [13, 13], [13, 15], [18, 15], [18, 17], [13, 17], [13, 21], [11, 21], [11, 17], [6, 17], [6, 15], [11, 15], [11, 13], [6, 13], [6, 11], [10.08, 11], [5, 3], [7.37, 3], [12, 10.29], [16.63, 3], [19, 3]]);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
