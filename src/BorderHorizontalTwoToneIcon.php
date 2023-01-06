<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['border', 'doc', 'edit', 'editing', 'editor', 'horizontal', 'sheet', 'spreadsheet', 'stroke', 'text', 'type', 'writing'],
)]
final class BorderHorizontalTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M11 3h2v2h-2zm8 0h2v2h-2zm0 4h2v2h-2zm-4-4h2v2h-2zM3 19h2v2H3zm0-4h2v2H3zm0-8h2v2H3zm4 12h2v2H7zm4-12h2v2h-2zM7 3h2v2H7zM3 3h2v2H3zm12 16h2v2h-2zm-4 0h2v2h-2zm8-4h2v2h-2zm0 4h2v2h-2zm-8-4h2v2h-2zm-8-4h18v2H3z');
        $doc->addChild($l0I1);
    }
}
