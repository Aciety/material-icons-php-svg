<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['code', 'key', 'lock', 'network', 'passcode', 'password', 'unlock', 'vpn'],
)]
final class VpnKeyTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M11.71 10.33C11.01 8.34 9.11 7 7 7c-2.76 0-5 2.24-5 5s2.24 5 5 5c2.11 0 4.01-1.34 4.71-3.33l.23-.67H18v4h2v-4h2v-2H11.94l-.23-.67zM7 15c-1.65 0-3-1.35-3-3s1.35-3 3-3 3 1.35 3 3-1.35 3-3 3z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M7 5c-3.86 0-7 3.14-7 7s3.14 7 7 7c2.72 0 5.17-1.58 6.32-4H16v4h6v-4h2V9H13.32C12.17 6.58 9.72 5 7 5zm15 8h-2v4h-2v-4h-6.06l-.23.67C11.01 15.66 9.11 17 7 17c-2.76 0-5-2.24-5-5s2.24-5 5-5c2.11 0 4.01 1.34 4.71 3.33l.23.67H22v2zM7 9c-1.65 0-3 1.35-3 3s1.35 3 3 3 3-1.35 3-3-1.35-3-3-3zm0 4c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z');
        $doc->addChild($l0I2);
    }
}
