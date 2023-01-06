<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['align', 'alignment', 'arrow', 'doc', 'edit', 'editing', 'editor', 'sheet', 'spreadsheet', 'text', 'top', 'type', 'up', 'vertical', 'writing'],
)]
final class VerticalAlignTopTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M4 3h16v2H4zm4 8h3v10h2V11h3l-4-4z');
        $doc->addChild($l0I1);
    }
}
