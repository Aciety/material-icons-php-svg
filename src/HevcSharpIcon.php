<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['alphabet', 'character', 'coding', 'efficiency', 'font', 'hevc', 'high', 'letter', 'symbol', 'text', 'type', 'video'],
)]
final class HevcSharpIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[5.5, 11], [4.5, 11], [4.5, 9], [3, 9], [3, 15], [4.5, 15], [4.5, 12.5], [5.5, 12.5], [5.5, 15], [7, 15], [7, 9], [5.5, 9]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[21, 11], [21, 9], [17, 9], [17, 15], [21, 15], [21, 13], [19.5, 13], [19.5, 13.5], [18.5, 13.5], [18.5, 10.5], [19.5, 10.5], [19.5, 11]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[14.25, 13.5], [13.5, 9], [12, 9], [13, 15], [15.5, 15], [16.5, 9], [15, 9]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[8, 9], [8, 15], [11.5, 15], [11.5, 13.5], [9.5, 13.5], [9.5, 12.5], [11.5, 12.5], [11.5, 11], [9.5, 11], [9.5, 10.5], [11.5, 10.5], [11.5, 9]]);
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
