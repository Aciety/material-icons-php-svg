<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['Android', 'OS', 'chrome', 'computer', 'connect', 'desktop', 'device', 'disabled', 'enabled', 'hardware', 'iOS', 'link', 'mac', 'mobile', 'off', 'on', 'phone', 'phonelink', 'slash', 'sync', 'tablet', 'web', 'windows'],
)]
final class PhonelinkOffOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0zm0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22 6V4H7.39l2 2zm2 13V9c0-.55-.45-1-1-1h-6c-.55 0-1 .45-1 1v3.61l2 2V10h4v7h-1.61l2.93 2.93c.39-.13.68-.49.68-.93zM2.06 1.51L.65 2.92l1.82 1.82C2.18 5.08 2 5.52 2 6v11H0v3h17.73l2.35 2.35 1.41-1.41L2.06 1.51zM4 17V6.27L14.73 17H4z');
        $doc->addChild($l0I1);
    }
}
