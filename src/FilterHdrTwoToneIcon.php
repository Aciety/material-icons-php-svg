<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['camera', 'edit', 'editing', 'effect', 'filter', 'hdr', 'image', 'mountain', 'mountains', 'photo', 'photography', 'picture'],
)]
final class FilterHdrTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M5 16h3.04l-1.52-2.03z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M9.78 11.63l1.25 1.67L14 9.33 19 16h-8.46l-4.01-5.37L1 18h22L14 6l-4.22 5.63zM5 16l1.52-2.03L8.04 16H5z');
        $doc->addChild($l0I2);
    }
}
