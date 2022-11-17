<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['alphabet', 'character', 'doc', 'edit', 'editing', 'editor', 'font', 'format', 'letter', 'sheet', 'spreadsheet', 'strikethrough', 'style', 'symbol', 'text', 'type', 'writing'],
)]
final class FormatStrikethroughTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M3 12h18v2H3zm11-2V7h5V4H5v3h5v3zm-4 6h4v3h-4z');
        $doc->addChild($l0I1);
    }
}
