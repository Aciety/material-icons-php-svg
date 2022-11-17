<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['1', 'add', 'brightness', 'contrast', 'digit', 'edit', 'editing', 'effect', 'exposure', 'image', 'number', 'photo', 'photography', 'plus', 'settings', 'symbol'],
)]
final class ExposurePlus1TwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20 18V5h-.3L15 6.7v1.7l3-1.02V18zm-10-1v-4h4v-2h-4V7H8v4H4v2h4v4z');
        $doc->addChild($l0I1);
    }
}
