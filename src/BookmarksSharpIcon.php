<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['bookmark', 'bookmarks', 'favorite', 'label', 'layers', 'library', 'multiple', 'read', 'reading', 'remember', 'ribbon', 'save', 'stack', 'tag'],
)]
final class BookmarksSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 18l2 1V1H7v2h12v15zM17 5H3v18l7-3 7 3V5z');
        $doc->addChild($l0I1);
    }
}
