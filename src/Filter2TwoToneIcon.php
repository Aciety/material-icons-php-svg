<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['2', 'digit', 'edit', 'editing', 'effect', 'filter', 'image', 'images', 'multiple', 'number', 'photography', 'picture', 'pictures', 'settings', 'stack', 'symbol'],
)]
final class Filter2TwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M7 17h14V3H7v14zm4-6c0-1.11.9-2 2-2h2V7h-4V5h4c1.1 0 2 .89 2 2v2c0 1.11-.9 2-2 2h-2v2h4v2h-6v-4z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M17 13h-4v-2h2c1.1 0 2-.89 2-2V7c0-1.11-.9-2-2-2h-4v2h4v2h-2c-1.1 0-2 .89-2 2v4h6v-2zm4-12H7c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm0 16H7V3h14v14zM1 21c0 1.1.9 2 2 2h16v-2H3V5H1v16z');
        $doc->addChild($l0I2);
    }
}
