<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['camera', 'card', 'device', 'eject', 'insert', 'memory', 'no', 'phone', 'sim', 'storage'],
)]
final class NoSimTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M7 19h9.23L7 9.77z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M3.79 3.74L2.38 5.15l2.74 2.74-.12.12V19c0 1.1.9 2 2 2h10c.35 0 .68-.1.97-.26l1.88 1.88 1.41-1.41L3.79 3.74zM7 19V9.77L16.23 19H7z');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M10.84 5L9.36 6.47 17 14.11V5z');
        $l0I3->setStyle('opacity', '.3');
        $doc->addChild($l0I3);
        $l0I4 = new SVGPath(d: 'M10.84 5H17v9.11l2 2V5c0-1.1-.9-2-2-2h-6.99L7.95 5.06l1.41 1.41L10.84 5z');
        $doc->addChild($l0I4);
    }
}
