<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['blur', 'center', 'edit', 'editing', 'effect', 'filter', 'focus', 'image', 'images', 'photography', 'picture', 'pictures', 'shift', 'tilt'],
)]
final class FilterTiltShiftTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M13 2.05v2.02c1.46.18 2.79.76 3.9 1.62l1.42-1.43C16.84 3.05 15.01 2.25 13 2.05zm0 17.88v2.02c2.01-.2 3.84-1 5.32-2.21l-1.43-1.43c-1.1.86-2.43 1.44-3.89 1.62zm-8.74-1.61l1.43-1.43c-.86-1.1-1.44-2.43-1.62-3.89H2.05c.2 2.01 1 3.84 2.21 5.32zM2.05 11h2.02c.18-1.46.76-2.79 1.62-3.9L4.26 5.68C3.05 7.16 2.25 8.99 2.05 11zm16.26-3.9c.86 1.11 1.44 2.44 1.62 3.9h2.02c-.2-2.01-1-3.84-2.21-5.32L18.31 7.1zM7.1 5.69c1.11-.86 2.44-1.44 3.9-1.62V2.05c-2.01.2-3.84 1-5.32 2.21L7.1 5.69zM5.68 19.74C7.16 20.95 9 21.75 11 21.95v-2.02c-1.46-.18-2.79-.76-3.9-1.62l-1.42 1.43zm16.27-6.73h-2.02c-.18 1.45-.76 2.78-1.62 3.89l1.43 1.43c1.21-1.48 2.01-3.32 2.21-5.32zM9 12c0 1.66 1.34 3 3 3s3-1.34 3-3-1.34-3-3-3-3 1.34-3 3z');
        $doc->addChild($l0I1);
    }
}
