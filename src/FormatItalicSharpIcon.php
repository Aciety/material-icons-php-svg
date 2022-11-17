<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['alphabet', 'character', 'doc', 'edit', 'editing', 'editor', 'font', 'format', 'italic', 'letter', 'sheet', 'spreadsheet', 'style', 'symbol', 'text', 'type', 'writing'],
)]
final class FormatItalicSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M10 4v3h2.21l-3.42 8H6v3h8v-3h-2.21l3.42-8H18V4h-8z');
        $doc->addChild($l0I0);
    }
}
