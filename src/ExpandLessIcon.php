<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['arrow', 'arrows', 'chevron', 'collapse', 'direction', 'expand', 'expandable', 'less', 'list', 'up'],
)]
final class ExpandLessIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12 8l-6 6 1.41 1.41L12 10.83l4.59 4.58L18 14z');
        $doc->addChild($l0I1);
    }
}
