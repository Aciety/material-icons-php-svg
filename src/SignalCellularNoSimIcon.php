<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['camera', 'card', 'cellular', 'chip', 'device', 'disabled', 'enabled', 'memory', 'no', 'off', 'offline', 'on', 'phone', 'signal', 'sim', 'slash', 'storage'],
)]
final class SignalCellularNoSimIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M-618-2872H782V728H-618zM-1 0h26v24H-1zm1 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18.99 5c0-1.1-.89-2-1.99-2h-7L7.66 5.34 19 16.68 18.99 5zM3.65 3.88L2.38 5.15 5 7.77V19c0 1.1.9 2 2 2h10.01c.35 0 .67-.1.96-.26l1.88 1.88 1.27-1.27L3.65 3.88z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M.01 0h24v24h-24z');
        $l0I2->setStyle('fill', 'none');
        $doc->addChild($l0I2);
    }
}
