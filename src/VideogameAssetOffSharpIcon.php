<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['asset', 'console', 'controller', 'device', 'disabled', 'enabled', 'game', 'gamepad', 'gaming', 'off', 'on', 'playstation', 'slash', 'video', 'videogame'],
)]
final class VideogameAssetOffSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20.83,18H22V6H8.83L20.83,18z M17.5,9c0.83,0,1.5,0.67,1.5,1.5S18.33,12,17.5,12S16,11.33,16,10.5S16.67,9,17.5,9z M21.19,21.19L2.81,2.81L1.39,4.22L3.17,6H2v12h13.17l4.61,4.61L21.19,21.19z M9,13v2H7v-2H5v-2h2V9.83L10.17,13H9z');
        $doc->addChild($l0I1);
    }
}
