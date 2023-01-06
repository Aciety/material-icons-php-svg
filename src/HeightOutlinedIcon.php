<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['arrow', 'color', 'doc', 'down', 'edit', 'editing', 'editor', 'fill', 'format', 'height', 'paint', 'sheet', 'spreadsheet', 'style', 'text', 'type', 'up', 'writing'],
)]
final class HeightOutlinedIcon extends SvgIcon
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
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPolygon(points: [[13, 6.99], [16, 6.99], [12, 3], [8, 6.99], [11, 6.99], [11, 17.01], [8, 17.01], [12, 21], [16, 17.01], [13, 17.01]]);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
