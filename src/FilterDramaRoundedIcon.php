<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['cloud', 'drama', 'edit', 'editing', 'effect', 'filter', 'image', 'photo', 'photography', 'picture', 'sky camera'],
)]
final class FilterDramaRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19.35 10.04C18.67 6.59 15.64 4 12 4 9.11 4 6.61 5.64 5.36 8.04 2.35 8.36 0 10.9 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96zM19 18H6.17c-2.09 0-3.95-1.53-4.15-3.61C1.79 12.01 3.66 10 6 10c1.92 0 3.53 1.36 3.91 3.17.1.48.5.83.98.83.61 0 1.11-.55.99-1.15-.43-2.24-2.11-4.03-4.29-4.63 1.1-1.46 2.89-2.37 4.89-2.2 2.88.25 5.01 2.82 5.01 5.71V12h1.37c1.45 0 2.79.97 3.07 2.4.39 1.91-1.08 3.6-2.93 3.6z');
        $doc->addChild($l0I1);
    }
}
