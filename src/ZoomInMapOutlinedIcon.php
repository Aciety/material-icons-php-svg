<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['arrow', 'arrows', 'destination', 'in', 'location', 'maps', 'move', 'place', 'stop', 'zoom'],
)]
final class ZoomInMapOutlinedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M9,9l0-6L7,3l0,2.59L3.91,2.5L2.5,3.91L5.59,7L3,7l0,2L9,9z M21,9V7l-2.59,0l3.09-3.09L20.09,2.5L17,5.59V3l-2,0l0,6L21,9z M3,15l0,2h2.59L2.5,20.09l1.41,1.41L7,18.41L7,21h2l0-6L3,15z M15,15l0,6h2v-2.59l3.09,3.09l1.41-1.41L18.41,17H21v-2L15,15z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
