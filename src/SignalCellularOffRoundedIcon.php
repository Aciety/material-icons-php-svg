<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['cell', 'cellular', 'data', 'disabled', 'enabled', 'internet', 'mobile', 'network', 'off', 'offline', 'on', 'phone', 'signal', 'slash', 'wifi', 'wireless'],
)]
final class SignalCellularOffRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21 3.41c0-.89-1.08-1.34-1.71-.71l-6.6 6.6L21 17.61V3.41zm.44 17.47L5.62 5.06c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l5.66 5.66-7.16 7.16c-.63.63-.19 1.71.7 1.71h15.32l1.29 1.29c.39.39 1.02.39 1.41 0 .4-.39.4-1.02.01-1.41z');
        $doc->addChild($l0I1);
    }
}
