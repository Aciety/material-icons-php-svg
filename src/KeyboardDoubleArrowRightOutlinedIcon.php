<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['arrow', 'arrows', 'direction', 'double', 'multiple', 'navigation', 'right'],
)]
final class KeyboardDoubleArrowRightOutlinedIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[6.41, 6], [5, 7.41], [9.58, 12], [5, 16.59], [6.41, 18], [12.41, 12]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[13, 6], [11.59, 7.41], [16.17, 12], [11.59, 16.59], [13, 18], [19, 12]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
