<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['airport', 'bag', 'baggage', 'carry', 'flight', 'hotel', 'luggage', 'on', 'suitcase', 'travel', 'trip'],
)]
final class LuggageTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M7,8v11h10V8H7z M9.5,18H8V9h1.5V18z M12.75,18h-1.5V9h1.5V18z M16,18h-1.5V9H16V18z');
        $l0I1->addChild($l1I0);
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M9.5,18H8V9h1.5V18z M12.75,18h-1.5V9h1.5V18z M16,18h-1.5V9H16V18z M17,6h-2V3c0-0.55-0.45-1-1-1h-4C9.45,2,9,2.45,9,3v3 H7C5.9,6,5,6.9,5,8v11c0,1.1,0.9,2,2,2c0,0.55,0.45,1,1,1s1-0.45,1-1h6c0,0.55,0.45,1,1,1s1-0.45,1-1c1.1,0,2-0.9,2-2V8 C19,6.9,18.1,6,17,6z M10.5,3.5h3V6h-3V3.5z M17,19H7V8h10V19z');
        $l0I2->addChild($l1I0);
        $doc->addChild($l0I2);
    }
}
