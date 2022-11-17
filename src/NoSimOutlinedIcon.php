<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['camera', 'card', 'device', 'eject', 'insert', 'memory', 'no', 'phone', 'sim', 'storage'],
)]
final class NoSimOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21.26 21.21L3.79 3.74 2.38 5.15l2.74 2.74-.12.12V19c0 1.1.9 2 2 2h10c.35 0 .68-.1.97-.26l1.88 1.88 1.41-1.41zM7 19V9.77L16.23 19H7zm3.84-14H17v9.11l2 2V5c0-1.1-.9-2-2-2h-6.99L7.95 5.06l1.41 1.41L10.84 5z');
        $doc->addChild($l0I1);
    }
}
