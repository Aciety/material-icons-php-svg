<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['archive', 'bookmark', 'border', 'favorite', 'label', 'library', 'read', 'reading', 'remember', 'ribbon', 'save', 'tag'],
)]
final class BookmarkBorderSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 3H5v18l7-3 7 3V3zm-2 15l-5-2.18L7 18V5h10v13z');
        $doc->addChild($l0I1);
    }
}
