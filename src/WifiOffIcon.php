<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['connection', 'data', 'disabled', 'enabled', 'internet', 'network', 'off', 'offline', 'on', 'scan', 'service', 'signal', 'slash', 'wifi', 'wireless'],
)]
final class WifiOffIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M24 .01c0-.01 0-.01 0 0L0 0v24h24V.01zM0 0h24v24H0V0zm0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22.99 9C19.15 5.16 13.8 3.76 8.84 4.78l2.52 2.52c3.47-.17 6.99 1.05 9.63 3.7l2-2zm-4 4c-1.29-1.29-2.84-2.13-4.49-2.56l3.53 3.53.96-.97zM2 3.05L5.07 6.1C3.6 6.82 2.22 7.78 1 9l1.99 2c1.24-1.24 2.67-2.16 4.2-2.77l2.24 2.24C7.81 10.89 6.27 11.73 5 13v.01L6.99 15c1.36-1.36 3.14-2.04 4.92-2.06L18.98 20l1.27-1.26L3.29 1.79 2 3.05zM9 17l3 3 3-3c-1.65-1.66-4.34-1.66-6 0z');
        $doc->addChild($l0I1);
    }
}
