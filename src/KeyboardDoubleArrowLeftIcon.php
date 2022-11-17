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
    tags: ['arrow', 'arrows', 'direction', 'double', 'left', 'multiple', 'navigation'],
)]
final class KeyboardDoubleArrowLeftIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[17.59, 18], [19, 16.59], [14.42, 12], [19, 7.41], [17.59, 6], [11.59, 12]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[11, 18], [12.41, 16.59], [7.83, 12], [12.41, 7.41], [11, 6], [5, 12]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
