<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['device'],
    tags: ['bluetooth', 'cast', 'connect', 'connection', 'device', 'paring', 'streaming', 'symbol', 'wireless'],
)]
final class BluetoothConnectedRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M6 13c.55-.55.55-1.44 0-1.99V11c-.55-.55-1.45-.55-2 0s-.55 1.45 0 2 1.45.55 2 0zm14-2c-.56-.56-1.45-.56-2-.01V11c-.55.55-.55 1.44 0 1.99V13c.55.55 1.44.55 1.99 0H20c.55-.55.55-1.45 0-2zm-3-4l-4.29-4.29c-.63-.63-1.71-.19-1.71.7v6.18L7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L11 14.41v6.18c0 .89 1.08 1.34 1.71.71L17 17c.39-.39.39-1.02 0-1.42L13.41 12 17 8.42c.39-.39.39-1.03 0-1.42zm-2.12 9.29L13 18.17v-3.76l1.88 1.88zM13 9.59V5.83l1.88 1.88L13 9.59z');
        $doc->addChild($l0I1);
    }
}
