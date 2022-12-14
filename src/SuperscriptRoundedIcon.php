<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['2', 'doc', 'edit', 'editing', 'editor', 'gmail', 'novitas', 'sheet', 'spreadsheet', 'style', 'superscript', 'symbol', 'text', 'writing', 'x'],
)]
final class SuperscriptRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M10.51,12.73L7.3,7.72C6.82,6.97,7.35,6,8.23,6h0c0.39,0,0.74,0.2,0.95,0.53l2.76,4.46h0.12l2.74-4.45 C15,6.2,15.36,6,15.75,6h0c0.88,0,1.42,0.98,0.94,1.72l-3.23,5l3.55,5.55C17.5,19.02,16.96,20,16.08,20h0 c-0.38,0-0.74-0.2-0.95-0.52l-3.07-4.89h-0.12l-3.07,4.89C8.66,19.8,8.31,20,7.92,20h0c-0.88,0-1.42-0.97-0.94-1.72L10.51,12.73z M23,8.5L23,8.5C23,8.22,22.78,8,22.5,8c0,0,0,0,0,0H20V7h2c0.55,0,1-0.45,1-1V5c0-0.55-0.45-1-1-1h-2.5C19.22,4,19,4.22,19,4.5v0 C19,4.78,19.22,5,19.5,5H22v1h-2c-0.55,0-1,0.45-1,1v1c0,0.55,0.45,1,1,1h2.5C22.78,9,23,8.78,23,8.5z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
