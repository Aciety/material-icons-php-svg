<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['device'],
    tags: ['cell', 'cellular', 'data', 'disabled', 'enabled', 'internet', 'mobile', 'network', 'off', 'on', 'phone', 'signal', 'slash', 'speed', 'wifi', 'wireless'],
)]
final class SignalWifiOffRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M23.64 7c-.45-.34-4.93-4-11.64-4-1.32 0-2.55.14-3.69.38L18.43 13.5 23.64 7zM4.12 2.01c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l1.35 1.35C1.91 5.76.59 6.82.36 7l10.08 12.56c.8 1 2.32 1 3.12 0l2.35-2.93 2.61 2.61c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L4.12 2.01z');
        $doc->addChild($l0I1);
    }
}
