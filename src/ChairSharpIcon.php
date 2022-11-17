<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['search'],
    tags: ['chair', 'comfort', 'couch', 'decoration', 'furniture', 'home', 'house', 'living', 'lounging', 'loveseat', 'room', 'seat', 'seating', 'sofa'],
)]
final class ChairSharpIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[7, 13], [17, 13], [17, 7], [20, 7], [20, 3], [4, 3], [4, 7], [7, 7]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M23,9h-4v6H5V9H1v10h3v1c0,0.55,0.45,1,1,1c0.55,0,1-0.45,1-1v-1h12v1c0,0.55,0.45,1,1,1c0.55,0,1-0.45,1-1v-1h3V9z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
