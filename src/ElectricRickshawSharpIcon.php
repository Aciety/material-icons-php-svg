<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['automobile', 'car', 'cars', 'electric', 'india', 'maps', 'rickshaw', 'transportation', 'truck', 'vehicle'],
)]
final class ElectricRickshawSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M21,11.18V9l-5-6H1v12h2.18C3.6,16.16,4.7,17,6,17s2.4-0.84,2.82-2h8.37c0.48,1.34,1.86,2.25,3.42,1.94 c1.16-0.23,2.11-1.17,2.33-2.33C23.25,13.05,22.34,11.66,21,11.18z M18.4,9H16V6.12L18.4,9z M3,5h4v4H3V5z M6,15 c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S6.55,15,6,15z M9,13v-2h3V9H9V5h5v8H9z M20,15c-0.55,0-1-0.45-1-1s0.45-1,1-1 s1,0.45,1,1S20.55,15,20,15z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[7, 20], [11, 20], [11, 18], [17, 21], [13, 21], [13, 23]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
