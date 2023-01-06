<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['image'],
    tags: ['1', 'brightness', 'contrast', 'digit', 'edit', 'editing', 'effect', 'exposure', 'image', 'neg', 'negative', 'number', 'photo', 'photography', 'settings', 'symbol'],
)]
final class ExposureNeg1TwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 18V5h-.3L14 6.7v1.7l3-1.02V18zM4 11h8v2H4z');
        $doc->addChild($l0I1);
    }
}
