<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['places'],
    tags: ['architecture', 'bungalow', 'cottage', 'estate', 'home', 'house', 'maps', 'place', 'real', 'residence', 'residential', 'stay', 'traveling'],
)]
final class BungalowRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('display', 'none');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,16c0.55,0,1,0.45,1,1v4h3c0.55,0,1-0.45,1-1v-5.21l0.57,0.92c0.29,0.47,0.91,0.61,1.38,0.32 c0.47-0.29,0.61-0.91,0.32-1.38L12.85,4.36c-0.39-0.63-1.31-0.63-1.7,0L4.73,14.65c-0.29,0.47-0.15,1.09,0.32,1.38 c0.47,0.29,1.08,0.15,1.38-0.32L7,14.8V20c0,0.55,0.45,1,1,1h3v-4C11,16.45,11.45,16,12,16z M13,13c0,0.55-0.45,1-1,1s-1-0.45-1-1 s0.45-1,1-1S13,12.45,13,13z');
        $doc->addChild($l0I1);
    }
}
