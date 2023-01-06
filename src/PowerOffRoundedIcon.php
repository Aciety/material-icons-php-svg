<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['charge', 'cord', 'disabled', 'electric', 'electrical', 'enabled', 'off', 'on', 'outlet', 'plug', 'power', 'slash'],
)]
final class PowerOffRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18 13.66V8.99c0-1-1.01-2-2-1.99V4c0-.55-.45-1-1-1s-1 .45-1 1v3h-3.88l7.63 7.63c.15-.3.25-.63.25-.97zM10 4c0-.55-.45-1-1-1s-1 .45-1 1v.88l2 2V4zm10.15 15.86l-7.66-7.66-5.1-5.1-2.56-2.56c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l2.63 2.63c-.03.13-.05.27-.05.41v4.66c0 .53.21 1.04.58 1.41L9.5 18v2c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-2l.48-.48 3.76 3.76c.39.39 1.02.39 1.41 0 .39-.39.39-1.03 0-1.42z');
        $doc->addChild($l0I1);
    }
}
