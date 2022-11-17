<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['2', 'doc', 'edit', 'editing', 'editor', 'gmail', 'novitas', 'sheet', 'spreadsheet', 'style', 'subscript', 'symbol', 'text', 'writing', 'x'],
)]
final class SubscriptRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M10.52,10.73L7.3,5.72C6.82,4.97,7.35,4,8.23,4h0c0.39,0,0.74,0.2,0.95,0.53l2.76,4.46h0.12l2.74-4.45 C15.01,4.2,15.37,4,15.76,4h0c0.88,0,1.42,0.98,0.94,1.72l-3.23,5l3.55,5.55C17.5,17.02,16.96,18,16.08,18h0 c-0.38,0-0.74-0.2-0.95-0.52l-3.07-4.89h-0.12l-3.07,4.89C8.67,17.8,8.31,18,7.92,18h0c-0.88,0-1.42-0.97-0.94-1.72L10.52,10.73z M23,19.5L23,19.5c0-0.28-0.22-0.5-0.5-0.5c0,0,0,0,0,0H20v-1h2c0.55,0,1-0.45,1-1v-1c0-0.55-0.45-1-1-1h-2.5 c-0.28,0-0.5,0.22-0.5,0.5v0c0,0.28,0.22,0.5,0.5,0.5H22v1h-2c-0.55,0-1,0.45-1,1v1c0,0.55,0.45,1,1,1h2.5 C22.78,20,23,19.78,23,19.5z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
