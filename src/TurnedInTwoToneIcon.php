<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['archive', 'bookmark', 'favorite', 'in', 'label', 'library', 'read', 'reading', 'remember', 'ribbon', 'save', 'tag', 'turned'],
)]
final class TurnedInTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M17 3H7c-1.1 0-1.99.9-1.99 2L5 21l7-3 7 3V5c0-1.1-.9-2-2-2zm0 14.97l-4.21-1.81-.79-.34-.79.34L7 17.97V5h10v12.97z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M7 17.97l4.21-1.81.79-.34.79.34L17 17.97V5H7z');
        $l0I2->setStyle('opacity', '.3');
        $doc->addChild($l0I2);
    }
}
