<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['circus', 'event', 'festival', 'local', 'maps', 'places', 'tent', 'tour', 'travel'],
)]
final class FestivalIcon extends SvgIcon
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
        $l1I0 = new SVGPolygon(points: [[13, 5.7], [13, 4], [16, 4], [15, 2.51], [16, 1], [11, 1], [11, 5.7], [2, 12], [2, 22], [9, 22], [9, 17], [12.03, 15], [15, 17], [15, 22], [22, 22], [22, 12]]);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
