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
final class RamenDiningOutlinedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M19.66,14c-0.66,1.92-2.24,3.54-4.4,4.39L14,18.89V20h-4v-1.11l-1.27-0.5c-2.16-0.85-3.74-2.47-4.4-4.39H19.66 M22,2 L4,3.99V12H2c0,3.69,2.47,6.86,6,8.25V22h8v-1.75c3.53-1.39,6-4.56,6-8.25H10.5V8H22V6.5H10.5V4.78L22,3.51V2L22,2z M8,6.5V5.06 l1-0.11V6.5H8L8,6.5z M5.5,6.5V5.34l1-0.11V6.5H5.5L5.5,6.5z M8,12V8h1v4H8L8,12z M5.5,12V8h1v4H5.5L5.5,12z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
