<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['breakfast', 'dining', 'dinner', 'food', 'fork', 'lunch', 'meal', 'restaurant', 'spaghetti', 'utensils'],
)]
final class DinnerDiningSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[2, 19], [4, 21], [20, 21], [22, 19]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M3,18l16.97,0c0,0,0,0,0,0c0.29-3.26-2.28-6-5.48-6c-2.35,0-4.35,1.48-5.14,3.55C8.94,15.32,8.48,15.17,8,15.08V9h4V6.75 h9v-1.5h-9V3H3v1.5h1v0.75H3v1.5h1V7.5H3V9h1v7.39C3.56,16.85,3.22,17.39,3,18z M8,7.5V6.75h2V7.5H8z M10,5.25H8V4.5h2V5.25z M5.5,4.5h1v0.75h-1V4.5z M5.5,6.75h1V7.5h-1V6.75z M6.5,9v6.06c-0.35,0.06-0.68,0.17-1,0.3V9H6.5z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
