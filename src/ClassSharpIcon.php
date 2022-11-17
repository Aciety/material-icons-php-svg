<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['archive', 'book', 'bookmark', 'class', 'favorite', 'label', 'library', 'read', 'reading', 'remember', 'ribbon', 'save', 'tag'],
)]
final class ClassSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20 2H4v20h16V2zM6 4h5v8l-2.5-1.5L6 12V4z');
        $doc->addChild($l0I1);
    }
}
