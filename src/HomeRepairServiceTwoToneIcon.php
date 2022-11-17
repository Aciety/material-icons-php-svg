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
    tags: ['box', 'equipment', 'fix', 'home', 'kit', 'mechanic', 'repair', 'repairing', 'service', 'tool', 'toolbox', 'tools', 'workshop'],
)]
final class HomeRepairServiceTwoToneIcon extends SVG
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M20,8h-3V6c0-1.1-0.9-2-2-2H9C7.9,4,7,4.9,7,6v2H4c-1.1,0-2,0.9-2,2v10h20V10C22,8.9,21.1,8,20,8z M9,6h6v2H9V6z M20,18 H4v-3h2v1h2v-1h8v1h2v-1h2V18z M20,13h-2v-1h-2v1H8v-1H6v1H4v-3h3h10h3V13z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[18, 16], [16, 16], [16, 15], [8, 15], [8, 16], [6, 16], [6, 15], [4, 15], [4, 18], [20, 18], [20, 15], [18, 15]]);
        $l2I0->addChild($l3I0);
        $l2I0->setStyle('opacity', '.3');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[4, 10], [4, 13], [6, 13], [6, 12], [8, 12], [8, 13], [16, 13], [16, 12], [18, 12], [18, 13], [20, 13], [20, 10], [17, 10], [7, 10]]);
        $l2I1->addChild($l3I0);
        $l2I1->setStyle('opacity', '.3');
        $l1I1->addChild($l2I1);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
