<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['actual', 'image', 'mountain', 'mountains', 'photo', 'photography', 'picture', 'select', 'size'],
)]
final class PhotoSizeSelectActualSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M23 3H1v18h22V3zM5 17l3.5-4.5 2.5 3.01L14.5 11l4.5 6H5z');
        $doc->addChild($l0I1);
    }
}
