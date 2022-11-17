<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['castle', 'fort', 'fortress', 'mansion', 'palace'],
)]
final class FortSharpIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[21, 3], [21, 5], [19, 5], [19, 3], [17, 3], [17, 5], [15, 5], [15, 3], [13, 3], [13, 7], [15, 9], [15, 10], [9, 10], [9, 9], [11, 7], [11, 3], [9, 3], [9, 5], [7, 5], [7, 3], [5, 3], [5, 5], [3, 5], [3, 3], [1, 3], [1, 7], [3, 9], [3, 15], [1, 17], [1, 21], [10, 21], [10, 16], [14, 16], [14, 21], [23, 21], [23, 17], [21, 15], [21, 9], [23, 7], [23, 3]]);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
