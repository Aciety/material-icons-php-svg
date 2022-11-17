<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['balance', 'bright', 'edit', 'editing', 'iridescent', 'light', 'lighting', 'setting', 'settings', 'white', 'wp'],
)]
final class WbIridescentSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M5 15h14V9.05H5V15zm6-14v3h2V1h-2zm8.04 2.6l-1.79 1.79 1.41 1.41 1.8-1.79-1.42-1.41zM13 23v-2.95h-2V23h2zm7.45-3.91l-1.8-1.79-1.41 1.41 1.79 1.8 1.42-1.42zM3.55 5.01L5.34 6.8l1.41-1.41L4.96 3.6 3.55 5.01zM4.96 20.5l1.79-1.8-1.41-1.41-1.79 1.79 1.41 1.42z');
        $doc->addChild($l0I1);
    }
}
