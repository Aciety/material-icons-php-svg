<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['archive', 'bookmark', 'favorite', 'in', 'label', 'library', 'read', 'reading', 'remember', 'ribbon', 'save', 'tag', 'turned'],
)]
final class TurnedInSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 3H5v18l7-3 7 3V3z');
        $doc->addChild($l0I1);
    }
}
