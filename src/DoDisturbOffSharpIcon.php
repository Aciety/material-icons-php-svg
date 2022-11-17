<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['cancel', 'close', 'denied', 'deny', 'disabled', 'disturb', 'do', 'enabled', 'off', 'on', 'remove', 'silence', 'slash', 'stop'],
)]
final class DoDisturbOffSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M17 11v2h-.88l4.33 4.33C21.43 15.79 22 13.96 22 12c0-5.52-4.48-10-10-10-1.96 0-3.79.57-5.33 1.55L14.12 11H17zM2.41 2.13L1 3.54l2.78 2.78C2.66 7.93 2 9.89 2 12c0 5.52 4.48 10 10 10 2.11 0 4.07-.66 5.68-1.78L20.46 23l1.41-1.41L2.41 2.13zM7 13v-2h1.46l2 2H7z');
        $doc->addChild($l0I1);
    }
}
