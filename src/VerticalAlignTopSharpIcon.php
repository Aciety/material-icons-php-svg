<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['align', 'alignment', 'arrow', 'doc', 'edit', 'editing', 'editor', 'sheet', 'spreadsheet', 'text', 'top', 'type', 'up', 'vertical', 'writing'],
)]
final class VerticalAlignTopSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M8 11h3v10h2V11h3l-4-4-4 4zM4 3v2h16V3H4z');
        $doc->addChild($l0I0);
    }
}
