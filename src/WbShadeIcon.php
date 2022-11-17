<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['balance', 'house', 'light', 'lighting', 'shade', 'wb', 'white'],
)]
final class WbShadeIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M14 12v2.5l5.5 5.5H22zm0 8h3l-3-3zM8 4l-6 6h2v10h8V10h2L8 4zm1 10H7v-4h2v4z');
        $doc->addChild($l0I1);
    }
}
