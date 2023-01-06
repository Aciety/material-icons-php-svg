<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['action'],
    tags: ['bookmark', 'delete', 'favorite', 'minus', 'remember', 'remove', 'ribbon', 'save', 'subtract'],
)]
final class BookmarkRemoveSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21,7h-6V5h6V7z M19,10.9c-0.64,0.13-1.32,0.14-2.02,0c-1.91-0.38-3.47-1.92-3.87-3.83C12.79,5.54,13.18,4.1,14,3L5,3v18 l7-3l7,3V10.9z');
        $doc->addChild($l0I1);
    }
}
