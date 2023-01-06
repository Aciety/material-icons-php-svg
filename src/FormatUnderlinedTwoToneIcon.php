<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['alphabet', 'character', 'doc', 'edit', 'editing', 'editor', 'font', 'format', 'letter', 'line', 'sheet', 'spreadsheet', 'style', 'symbol', 'text', 'type', 'under', 'underlined', 'writing'],
)]
final class FormatUnderlinedTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M5 19h14v2H5zM6 3v8c0 3.31 2.69 6 6 6s6-2.69 6-6V3h-2.5v8c0 1.93-1.57 3.5-3.5 3.5S8.5 12.93 8.5 11V3H6z');
        $doc->addChild($l0I1);
    }
}
