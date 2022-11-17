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
    tags: ['arrow', 'arrows', 'direction', 'directions', 'maps', 'navigation', 'path', 'right', 'route', 'sign', 'traffic', 'turn'],
)]
final class TurnSharpRightSharpIcon extends SVG
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
        $l1I0 = new SVGPolygon(points: [[18, 6.83], [19.59, 8.41], [21, 7], [17, 3], [13, 7], [14.41, 8.41], [16, 6.83], [16, 13], [6, 13], [6, 21], [8, 21], [8, 15], [18, 15]]);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
