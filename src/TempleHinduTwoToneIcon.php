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
    tags: ['hindu', 'hinduism', 'hindus', 'mandir', 'religion', 'spiritual', 'temple', 'worship'],
)]
final class TempleHinduTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[13.51, 5], [10.49, 5], [9.890000000000001, 7], [14.11, 7]]);
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[14.71, 9], [9.289999999999999, 9], [8.69, 11], [15.31, 11]]);
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[15.91, 13], [8.09, 13], [7.49, 15], [4, 15], [4, 20], [9, 20], [9, 15], [15, 15], [15, 20], [20, 20], [20, 15], [16.51, 15]]);
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M20 11v2h-2L15 3V1h-2v2h-2.03V1h-2v2.12L6 13H4v-2H2v11h9v-5h2v5h9V11h-2zm-9.51-6h3.02l.6 2H9.89l.6-2zm-1.2 4h5.42l.6 2H8.69l.6-2zM20 20h-5v-5H9v5H4v-5h3.49l.6-2h7.82l.6 2H20v5z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
