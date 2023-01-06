<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alphabet', 'animated', 'animation', 'bitmap', 'character', 'font', 'format', 'gif', 'graphics', 'interchange', 'letter', 'symbol', 'text', 'type'],
)]
final class GifBoxRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M10.5,10.5c0,0.28-0.22,0.5-0.5,0.5 H8.5v2h1v-0.5c0-0.29,0.25-0.53,0.55-0.5c0.26,0.02,0.45,0.26,0.45,0.52V13c0,0.55-0.45,1-1,1h-1c-0.55,0-1-0.45-1-1v-2 c0-0.55,0.45-1,1-1H10C10.28,10,10.5,10.22,10.5,10.5z M12,10c0.28,0,0.5,0.22,0.5,0.5v3c0,0.28-0.22,0.5-0.5,0.5s-0.5-0.22-0.5-0.5 v-3C11.5,10.22,11.72,10,12,10z M14,14c-0.28,0-0.5-0.22-0.5-0.5v-3c0-0.28,0.22-0.5,0.5-0.5h2c0.28,0,0.5,0.22,0.5,0.5 S16.28,11,16,11h-1.5v0.5h1c0.28,0,0.5,0.22,0.5,0.5s-0.22,0.5-0.5,0.5h-1v1C14.5,13.78,14.28,14,14,14z');
        $doc->addChild($l0I1);
    }
}
