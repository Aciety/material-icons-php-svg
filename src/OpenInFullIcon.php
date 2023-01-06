<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['action', 'arrow', 'arrows', 'expand', 'full', 'grow', 'in', 'move', 'open'],
)]
final class OpenInFullIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPolygon(points: [[21, 11], [21, 3], [13, 3], [16.29, 6.29], [6.29, 16.29], [3, 13], [3, 21], [11, 21], [7.71, 17.71], [17.71, 7.71]]);
        $doc->addChild($l0I1);
    }
}
