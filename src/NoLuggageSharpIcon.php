<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['bag', 'baggage', 'carry', 'disabled', 'enabled', 'luggage', 'no', 'off', 'on', 'slash', 'suitcase', 'travel'],
)]
final class NoLuggageSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12.75,9v0.92l1.75,1.75V9H16v4.17l3,3V6h-4V2H9v4H8.83l3,3H12.75z M10.5,3.5h3V6h-3V3.5z M21.19,21.19L2.81,2.81L1.39,4.22 L5,7.83V21h2v1h2v-1h6v1h2v-1h1.17l1.61,1.61L21.19,21.19z M8,18v-7.17l1.5,1.5V18H8z M11.25,18v-3.92l1.5,1.5V18H11.25z');
        $doc->addChild($l0I1);
    }
}
