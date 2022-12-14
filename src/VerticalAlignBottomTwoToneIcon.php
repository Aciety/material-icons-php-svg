<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['align', 'alignment', 'arrow', 'bottom', 'doc', 'down', 'edit', 'editing', 'editor', 'sheet', 'spreadsheet', 'text', 'type', 'vertical', 'writing'],
)]
final class VerticalAlignBottomTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M11 3v10H8l4 4 4-4h-3V3zM4 19h16v2H4z');
        $doc->addChild($l0I1);
    }
}
