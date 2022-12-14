<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['Android', 'OS', 'access', 'chrome', 'desktop', 'device', 'disabled', 'display', 'enabled', 'hardware', 'iOS', 'mac', 'monitor', 'off', 'offline', 'on', 'screen', 'slash', 'web', 'window'],
)]
final class DesktopAccessDisabledSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M1.41 1.69L0 3.1l1 .99V18h9v2H8v2h8v-2h-2v-2h.9l6 6 1.41-1.41-20.9-20.9zM2.99 16V6.09L12.9 16H2.99zM4.55 2l2 2H21v12h-2.45l2 2h2.44V2z');
        $doc->addChild($l0I1);
    }
}
