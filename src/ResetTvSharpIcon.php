<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['arrow', 'device', 'hardware', 'monitor', 'reset', 'television', 'tv'],
)]
final class ResetTvSharpIcon extends SVG
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
        $l1I0 = new SVGPolygon(points: [[22, 10], [12.99, 10], [12.99, 7], [9, 11], [12.99, 15], [12.99, 12], [20, 12], [20, 17], [4, 17], [4, 5], [20, 5], [20, 8], [22, 8], [22, 3], [2, 3], [2, 19], [8, 19], [8, 21], [16, 21], [16, 19], [22, 19]]);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
