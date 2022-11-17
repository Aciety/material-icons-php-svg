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
    tags: ['hindu', 'hinduism', 'hindus', 'mandir', 'religion', 'spiritual', 'temple', 'worship'],
)]
final class TempleHinduIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[6.6, 11], [17.4, 11], [16.5, 8], [7.5, 8]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[20, 11], [20, 13], [4, 13], [4, 11], [2, 11], [2, 22], [10, 22], [10, 17], [14, 17], [14, 22], [22, 22], [22, 11]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[15.9, 6], [15, 3], [15, 1], [13, 1], [13, 3], [10.97, 3], [10.97, 1], [8.970000000000001, 1], [8.970000000000001, 3.12], [8.1, 6]]);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
