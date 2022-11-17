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
final class WbIridescentTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M7 11h10v2H7z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M5 15h14V9H5v6zm2-4h10v2H7v-2zm4-10h2v3h-2zm6.25 4.39l1.41 1.41 1.8-1.79-1.42-1.41zM11 20h2v3h-2zm6.24-1.29l1.79 1.8 1.42-1.42-1.8-1.79zM5.34 6.805l-1.788-1.79L4.96 3.61l1.788 1.788zM3.55 19.08l1.41 1.42 1.79-1.8-1.41-1.41z');
        $doc->addChild($l0I2);
    }
}
