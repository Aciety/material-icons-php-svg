<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['A', 'alphabet', 'arrow', 'character', 'field', 'font', 'letter', 'move', 'rotate', 'symbol', 'text', 'type', 'up'],
)]
final class TextRotateUpTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18 4l-3 3h2v13h2V7h2l-3-3zm-6.2 11.5v-5l2.2-.9V7.5L3 12.25v1.5l11 4.75v-2.1l-2.2-.9zM4.98 13L10 11.13v3.74L4.98 13z');
        $doc->addChild($l0I1);
    }
}
