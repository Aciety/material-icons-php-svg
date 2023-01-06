<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['breakfast', 'dining', 'dinner', 'drink', 'fastfood', 'food', 'lunch', 'meal', 'noodles', 'ramen', 'restaurant'],
)]
final class RamenDiningRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M22,2.84L22,2.84c0-0.45-0.39-0.79-0.83-0.75L4.89,3.9C4.38,3.95,4,4.38,4,4.89V12H3.08c-0.6,0-1.08,0.53-1,1.13 C2.52,16.33,4.83,19,8,20.25V21c0,0.55,0.45,1,1,1h6c0.55,0,1-0.45,1-1v-0.75c3.17-1.25,5.48-3.92,5.92-7.12 c0.08-0.6-0.4-1.13-1-1.13H10.5V8h10.75C21.66,8,22,7.66,22,7.25v0c0-0.41-0.34-0.75-0.75-0.75H10.5V4.78l10.83-1.19 C21.71,3.54,22,3.22,22,2.84z M6.5,5.22V6.5h-1V5.34L6.5,5.22z M5.5,8h1v4h-1V8z M9,12H8V8h1V12z M9,6.5H8V5.06l1-0.11V6.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
