<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['device'],
    tags: ['Android', 'OS', 'cell', 'device', 'disabled', 'enabled', 'hardware', 'iOS', 'mobile', 'off', 'on', 'phone', 'silence', 'slash', 'tablet'],
)]
final class MobileOffSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M17 5v8.61l2 2V1H5v.61L8.39 5zM2.9 2.35L1.49 3.76 5 7.27V23h14v-1.73l1.7 1.7 1.41-1.41L2.9 2.35zM7 19V9.27L16.73 19H7z');
        $doc->addChild($l0I1);
    }
}
