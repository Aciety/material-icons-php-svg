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
    tags: ['2', 'doc', 'edit', 'editing', 'editor', 'gmail', 'novitas', 'sheet', 'spreadsheet', 'style', 'superscript', 'symbol', 'text', 'writing', 'x'],
)]
final class SuperscriptSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M20,7v1h3v1h-4V6h3V5h-3V4h4v3H20z M5.88,20h2.66l3.4-5.42h0.12l3.4,5.42h2.66l-4.65-7.27L17.81,6h-2.68l-3.07,4.99h-0.12 L8.85,6H6.19l4.32,6.73L5.88,20z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
