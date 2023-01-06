<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['places'],
    tags: ['cigarette', 'disabled', 'enabled', 'free', 'never', 'no', 'off', 'on', 'places', 'prohibited', 'slash', 'smoke', 'smoking', 'tobacco', 'warning', 'zone'],
)]
final class SmokeFreeTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20.5 13H22v3h-1.5zM18 13h1.5v3H18zm.85-8.27c.62-.61 1-1.45 1-2.38h-1.5c0 1.02-.83 1.85-1.85 1.85v1.5c2.24 0 4 1.83 4 4.07V12H22V9.76c0-2.22-1.28-4.14-3.15-5.03zM14.5 8.65h1.53c1.05 0 1.97.74 1.97 2.05V12h1.5v-1.64c0-1.81-1.6-3.16-3.47-3.16H14.5c-1.02 0-1.85-.98-1.85-2s.83-1.75 1.85-1.75v-1.5c-1.85 0-3.35 1.5-3.35 3.35s1.5 3.35 3.35 3.35zM17 13h-2.34L17 15.34zM3.41 4.59L2 6l7 7H2v3h10l7 7 1.41-1.41z');
        $doc->addChild($l0I1);
    }
}
