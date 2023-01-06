<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['alphabet', 'character', 'color', 'doc', 'edit', 'editing', 'editor', 'fill', 'font', 'format', 'letter', 'paint', 'sheet', 'size', 'spreadsheet', 'style', 'symbol', 'text', 'type', 'writing'],
)]
final class FormatSizeSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M9 4v3h5v12h3V7h5V4H9zm-6 8h3v7h3v-7h3V9H3v3z');
        $doc->addChild($l0I0);
    }
}
