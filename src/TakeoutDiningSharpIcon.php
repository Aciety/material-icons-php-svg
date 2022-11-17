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
    tags: ['box', 'container', 'delivery', 'dining', 'food', 'meal', 'restaurant', 'takeout'],
)]
final class TakeoutDiningSharpIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[22, 7.46], [20.59, 6.05], [19, 7.63], [19.03, 7.07], [14.98, 3], [9.02, 3], [4.97, 7.07], [5, 7.57], [3.41, 6.01], [2, 7.44], [4.66, 10], [19.35, 10]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[5.93, 20], [18.07, 20], [18.7, 11.55], [5.3, 11.55]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
