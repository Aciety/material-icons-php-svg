<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['bed', 'bedroom', 'double', 'furniture', 'home', 'hotel', 'house', 'king', 'night', 'pillows', 'queen', 'rest', 'room', 'single', 'sleep', 'twin'],
)]
final class SingleBedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M20,12c0-1.1-0.9-2-2-2V7c0-1.1-0.9-2-2-2H8C6.9,5,6,5.9,6,7v3c-1.1,0-2,0.9-2,2v5h1.33L6,19h1l0.67-2h8.67L17,19h1l0.67-2 H20V12z M16,10h-3V7h3V10z M8,7h3v3H8V7z M6,12h12v3H6V12z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
