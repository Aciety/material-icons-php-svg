<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['comment', 'doc', 'document', 'note', 'notes', 'text', 'write', 'writing'],
)]
final class NotesSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M21 11.01L3 11v2h18zM3 16h12v2H3zM21 6H3v2.01L21 8z');
        $doc->addChild($l0I0);
    }
}
