<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['image'],
    tags: ['bolt', 'disabled', 'electric', 'enabled', 'fast', 'flash', 'lightning', 'off', 'on', 'slash', 'thunderbolt'],
)]
final class FlashOnSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M7 2v11h3v9l7-12h-4l3-8z');
        $doc->addChild($l0I1);
    }
}
