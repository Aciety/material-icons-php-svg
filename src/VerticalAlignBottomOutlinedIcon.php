<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['align', 'alignment', 'arrow', 'bottom', 'doc', 'down', 'edit', 'editing', 'editor', 'sheet', 'spreadsheet', 'text', 'type', 'vertical', 'writing'],
)]
final class VerticalAlignBottomOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16 13h-3V3h-2v10H8l4 4 4-4zM4 19v2h16v-2H4z');
        $doc->addChild($l0I1);
    }
}
