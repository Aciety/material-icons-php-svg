<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['countdown', 'full', 'hourglass', 'loading', 'minutes', 'time', 'wait', 'waiting'],
)]
final class HourglassFullRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M6 4v3.17c0 .53.21 1.04.59 1.42L10 12l-3.42 3.42c-.37.38-.58.89-.58 1.42V20c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2v-3.16c0-.53-.21-1.04-.58-1.41L14 12l3.41-3.4c.38-.38.59-.89.59-1.42V4c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2z');
        $doc->addChild($l0I1);
    }
}
