<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['brief', 'comment', 'doc', 'document', 'note', 'short', 'text', 'write', 'writing'],
)]
final class ShortTextSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M4 9h16v2H4V9zm0 4h10v2H4v-2z');
        $doc->addChild($l0I0);
    }
}
