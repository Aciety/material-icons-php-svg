<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['achievement', 'bookmark', 'class', 'favorite', 'highlight', 'hotel', 'important', 'marked', 'rank', 'ranking', 'rate', 'rating', 'reward', 'save', 'saved', 'shape', 'special', 'star'],
)]
final class HotelClassTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPolygon(points: [[11, 8.890000000000001], [11.94, 12], [14.76, 12], [12.49, 13.62], [13.42, 16.63], [11, 14.79], [8.58, 16.63], [9.51, 13.62], [7.24, 12], [10.06, 12]]);
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'm11 8.89.94 3.11h2.82l-2.27 1.62.93 3.01L11 14.79l-2.42 1.84.93-3.01L7.24 12h2.82L11 8.89zM8.58 10H1l6.17 4.41L4.83 22 11 17.31 17.18 22l-2.35-7.59L21 10h-7.58L11 2l-2.42 8zm12.78 12-1.86-6.01L23.68 13h-3.44l-3.08 2.2 1.46 4.72L21.36 22zM17 8l-1.82-6-1.04 3.45.77 2.55H17z');
        $doc->addChild($l0I2);
    }
}
