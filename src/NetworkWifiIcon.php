<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['cell', 'cellular', 'data', 'internet', 'mobile', 'network', 'phone', 'speed', 'wifi', 'wireless'],
)]
final class NetworkWifiIcon extends SvgIcon
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
        $l0I1 = new SVGPath(d: 'M24,8.98C20.93,5.9,16.69,4,12,4C7.31,4,3.07,5.9,0,8.98L12,21v0l0,0L24,8.98z M2.92,9.07C5.51,7.08,8.67,6,12,6 s6.49,1.08,9.08,3.07l-1.43,1.43C17.5,8.94,14.86,8,12,8s-5.5,0.94-7.65,2.51L2.92,9.07z');
        $doc->addChild($l0I1);
    }
}
