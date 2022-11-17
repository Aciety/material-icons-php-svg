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
    tags: ['bag', 'baggage', 'carry', 'disabled', 'enabled', 'luggage', 'no', 'off', 'on', 'slash', 'suitcase', 'travel'],
)]
final class NoLuggageRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M20.49,20.49L3.51,3.51c-0.39-0.39-1.02-0.39-1.41,0c-0.39,0.39-0.39,1.02,0,1.41l2.92,2.92C5.02,7.9,5,7.95,5,8v11 c0,1.1,0.9,2,2,2c0,0.55,0.45,1,1,1c0.55,0,1-0.45,1-1h6c0,0.55,0.45,1,1,1c0.55,0,1-0.45,1-1c0.34,0,0.65-0.09,0.93-0.24 l1.14,1.14c0.39,0.39,1.02,0.39,1.41,0C20.88,21.51,20.88,20.88,20.49,20.49z M8.75,18C8.34,18,8,17.66,8,17.25v-6.42l1.5,1.5v4.92 C9.5,17.66,9.16,18,8.75,18z M12,18c-0.41,0-0.75-0.34-0.75-0.75v-3.17l1.5,1.5v1.67C12.75,17.66,12.41,18,12,18z M12,9 c0.41,0,0.75,0.34,0.75,0.75v0.17l1.75,1.75V9.75C14.5,9.34,14.84,9,15.25,9S16,9.34,16,9.75v3.42l3,3V8c0-1.1-0.9-2-2-2h-2V3 c0-0.55-0.45-1-1-1h-4C9.45,2,9,2.45,9,3v3H8.83l3.03,3.03C11.91,9.02,11.95,9,12,9z M10.5,3.5h3V6h-3V3.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
