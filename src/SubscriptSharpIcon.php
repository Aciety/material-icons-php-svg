<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['2', 'doc', 'edit', 'editing', 'editor', 'gmail', 'novitas', 'sheet', 'spreadsheet', 'style', 'subscript', 'symbol', 'text', 'writing', 'x'],
)]
final class SubscriptSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M20,18v1h3v1h-4v-3h3v-1h-3v-1h4v3H20z M5.88,18h2.66l3.4-5.42h0.12l3.4,5.42h2.66l-4.65-7.27L17.81,4h-2.68l-3.07,4.99 h-0.12L8.85,4H6.19l4.32,6.73L5.88,18z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
