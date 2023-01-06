<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['places'],
    tags: ['building', 'carpenter', 'construction', 'cutting', 'handyman', 'repair', 'saw', 'tool'],
)]
final class CarpenterTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M5.71,5.62L7,4.33l8.49,8.49l-2.81,2.81L5.71,5.62z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M19.73,14.23L7,1.5L3.11,5.39l8.13,11.67c-0.78,0.78-0.78,2.05,0,2.83l1.41,1.41c0.78,0.78,2.05,0.78,2.83,0l4.24-4.24 C20.51,16.28,20.51,15.01,19.73,14.23z M5.71,5.62L7,4.33l8.49,8.49l-2.81,2.81L5.71,5.62z M14.07,19.88l-1.41-1.41l4.24-4.24 l1.41,1.41L14.07,19.88z');
        $doc->addChild($l0I2);
    }
}
