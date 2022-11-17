<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['+', 'add', 'and', 'certified', 'cross', 'health', 'home', 'nest', 'plus', 'privacy', 'private', 'protect', 'protection', 'safety', 'security', 'shield', 'symbol', 'verified'],
)]
final class HealthAndSafetyOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M10.5,13H8v-3h2.5V7.5h3V10H16v3h-2.5v2.5h-3V13z M12,2L4,5v6.09c0,5.05,3.41,9.76,8,10.91c4.59-1.15,8-5.86,8-10.91V5L12,2 z M18,11.09c0,4-2.55,7.7-6,8.83c-3.45-1.13-6-4.82-6-8.83v-4.7l6-2.25l6,2.25V11.09z');
        $doc->addChild($l0I1);
    }
}
