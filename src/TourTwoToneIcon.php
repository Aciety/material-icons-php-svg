<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['destination', 'flag', 'places', 'tour', 'travel', 'visit'],
)]
final class TourTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[7, 12], [7, 6], [18.05, 6], [16.85, 9], [18.05, 12]]);
        $l2I0->setStyle('opacity', '.3');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M21,4h-8h-1H7V2H5v2v10v8h2v-8h4h1h9l-2-5L21,4z M7,12V6h11.05l-1.2,3l1.2,3H7z M14,9c0,1.1-0.9,2-2,2s-2-0.9-2-2 s0.9-2,2-2S14,7.9,14,9z');
        $l2I1->addChild($l3I0);
        $l1I1->addChild($l2I1);
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
