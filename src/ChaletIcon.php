<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['places'],
    tags: ['architecture', 'chalet', 'cottage', 'estate', 'home', 'house', 'maps', 'place', 'real', 'residence', 'residential', 'stay', 'traveling'],
)]
final class ChaletIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M10,7.5l7.5,7.5l-1.41,1.41L15,15.33V20h-4v-5H9v5H5v-4.67l-1.09,1.09L2.5,15L10,7.5z M22,6.5h-1.19l0.75-0.75l-0.71-0.71 L19.39,6.5H18.5V5.61l1.45-1.45l-0.71-0.71L18.5,4.19V3h-1v1.19l-0.75-0.75l-0.71,0.71l1.45,1.45V6.5h-0.89l-1.45-1.45l-0.71,0.71 l0.75,0.75H14v1h1.19l-0.75,0.75l0.71,0.71l1.45-1.45h0.89v0.89l-1.45,1.45l0.71,0.71l0.75-0.75V11h1V9.81l0.75,0.75l0.71-0.71 L18.5,8.39V7.5h0.89l1.45,1.45l0.71-0.71L20.81,7.5H22V6.5z');
        $doc->addChild($l0I1);
    }
}
