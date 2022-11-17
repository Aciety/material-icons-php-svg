<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['Android', 'OS', 'chrome', 'desktop', 'device', 'disabled', 'enabled', 'hardware', 'iOS', 'mac', 'monitor', 'off', 'on', 'slash', 'television', 'tv', 'web', 'window'],
)]
final class TvOffSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21 7v10.88l2 2V5h-9.58l3.29-3.3L16 1l-4 4-4-4-.7.7L10.58 5H8.12l2 2zM2.41 2.13l-.14.14L1 3.54l1.53 1.53H1V21h17.46l1.99 1.99 1.26-1.26.15-.15L2.41 2.13zM3 19V7h1.46l12 12H3z');
        $doc->addChild($l0I1);
    }
}
