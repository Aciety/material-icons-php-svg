<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['device'],
    tags: ['cell', 'cellular', 'data', 'internet', 'mobile', 'network', 'phone', 'speed', 'wifi', 'wireless'],
)]
final class NetworkCellIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M2,22h20V2L2,22z M20,20h-3V9.83l3-3V20z');
        $doc->addChild($l0I1);
    }
}
