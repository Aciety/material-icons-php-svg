<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alt', 'arrow', 'arrows', 'horizontal', 'internet', 'sync', 'technology', 'up', 'update', 'wifi'],
)]
final class SyncAltOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[7.41, 13.41], [6, 12], [2, 16], [6, 20], [7.41, 18.59], [5.83, 17], [21, 17], [21, 15], [5.83, 15]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[16.59, 10.59], [18, 12], [22, 8], [18, 4], [16.59, 5.41], [18.17, 7], [3, 7], [3, 9], [18.17, 9]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
