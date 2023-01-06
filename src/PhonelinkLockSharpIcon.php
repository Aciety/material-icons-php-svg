<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['Android', 'OS', 'cell', 'connection', 'device', 'erase', 'hardware', 'iOS', 'lock', 'locked', 'mobile', 'password', 'phone', 'phonelink', 'privacy', 'private', 'protection', 'safety', 'secure', 'security', 'tablet'],
)]
final class PhonelinkLockSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21 1H7v5h2V4h10v16H9v-2H7v5h14V1zM10.8 11V9.5C10.8 8.1 9.4 7 8 7S5.2 8.1 5.2 9.5V11H4v6h8v-6h-1.2zm-1.3 0h-3V9.5c0-.8.7-1.3 1.5-1.3s1.5.5 1.5 1.3V11z');
        $doc->addChild($l0I1);
    }
}
