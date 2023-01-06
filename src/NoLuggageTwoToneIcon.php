<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['bag', 'baggage', 'carry', 'disabled', 'enabled', 'luggage', 'no', 'off', 'on', 'slash', 'suitcase', 'travel'],
)]
final class NoLuggageTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M16.17,19l-3.42-3.42V18h-1.5v-3.92L9.5,12.33V18H8v-7.17l-1-1V19H16.17z M17,8v6.17l-1-1V9h-1.5v2.67l-1.75-1.75V9h-0.92 l-1-1H17z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M16,13.17l-1.5-1.5V9H16V13.17z M19.78,22.61l-1.85-1.85C17.65,20.91,17.34,21,17,21c0,0.55-0.45,1-1,1s-1-0.45-1-1H9 c0,0.55-0.45,1-1,1c-0.55,0-1-0.45-1-1c-1.1,0-2-0.9-2-2V8c0-0.05,0.02-0.1,0.02-0.15L1.39,4.22l1.41-1.41l18.38,18.38 L19.78,22.61z M16.17,19l-3.42-3.42V18h-1.5v-3.92L9.5,12.33V18H8v-7.17l-1-1V19H16.17z M12.75,9h-0.92l0.92,0.92V9z M19,8v8.17 l-2-2V8h-6.17L9.84,7.01L9,6.17V6V3c0-0.55,0.45-1,1-1h4c0.55,0,1,0.45,1,1v3h2C18.1,6,19,6.9,19,8z M10.5,6h3V3.5h-3V6z');
        $l1I0->addChild($l2I0);
        $l0I2->addChild($l1I0);
        $doc->addChild($l0I2);
    }
}
