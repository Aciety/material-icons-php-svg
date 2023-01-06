<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['doc', 'edit', 'editing', 'editor', 'format', 'quotation', 'quote', 'sheet', 'spreadsheet', 'text', 'type', 'writing'],
)]
final class FormatQuoteIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M6 17h3l2-4V7H5v6h3zm8 0h3l2-4V7h-6v6h3z');
        $doc->addChild($l0I1);
    }
}
