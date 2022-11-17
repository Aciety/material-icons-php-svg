<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['abstract', 'boy', 'gender', 'male', 'man', 'social', 'symbol'],
)]
final class Man3SharpIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[16, 7], [8, 7], [8, 15], [10, 15], [10, 22], [14, 22], [14, 15], [16, 15]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '10.41', y: '2.41', width: '3.18', height: '3.18');
        $l2I1->setAttribute('transform', 'matrix(0.7071 0.7071 -0.7071 0.7071 6.3431 -7.3137)');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
