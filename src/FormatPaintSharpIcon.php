<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['brush', 'color', 'doc', 'edit', 'editing', 'editor', 'fill', 'format', 'paint', 'roller', 'sheet', 'spreadsheet', 'style', 'text', 'type', 'writing'],
)]
final class FormatPaintSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M18 4V2H4v6h14V6h1v4H9v12h4V12h8V4h-3z');
        $doc->addChild($l0I0);
    }
}
