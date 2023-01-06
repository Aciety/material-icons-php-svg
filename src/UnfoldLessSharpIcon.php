<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['arrow', 'arrows', 'chevron', 'collapse', 'direction', 'expand', 'expandable', 'inward', 'less', 'list', 'navigation', 'unfold', 'up'],
)]
final class UnfoldLessSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M24 0v24H0V0h24z');
        $l0I0->setStyle('fill', 'none');
        $l0I0->setStyle('opacity', '.87');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M7.41 18.59L8.83 20 12 16.83 15.17 20l1.41-1.41L12 14l-4.59 4.59zm9.18-13.18L15.17 4 12 7.17 8.83 4 7.41 5.41 12 10l4.59-4.59z');
        $doc->addChild($l0I1);
    }
}
