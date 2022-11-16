<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class AccountTreeSharpIcon extends SVG
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
        $l0I1 = new SVGPolygon(points: [[22, 11], [22, 3], [15, 3], [15, 6], [9, 6], [9, 3], [2, 3], [2, 11], [9, 11], [9, 8], [11, 8], [11, 18], [15, 18], [15, 21], [22, 21], [22, 13], [15, 13], [15, 16], [13, 16], [13, 8], [15, 8], [15, 11]]);
        $doc->addChild($l0I1);
    }
}
