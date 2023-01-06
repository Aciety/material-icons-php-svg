<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['image'],
    tags: ['1', 'brightness', 'contrast', 'digit', 'edit', 'editing', 'effect', 'exposure', 'image', 'neg', 'negative', 'number', 'photo', 'photography', 'settings', 'symbol'],
)]
final class ExposureNeg1SharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M4 11v2h8v-2H4zm15 7h-2V7.38L14 8.4V6.7L18.7 5h.3v13z');
        $doc->addChild($l0I1);
    }
}
