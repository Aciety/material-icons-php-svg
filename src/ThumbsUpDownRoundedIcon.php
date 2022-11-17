<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['dislike', 'down', 'favorite', 'fingers', 'gesture', 'hands', 'like', 'rate', 'rating', 'thumbs', 'up'],
)]
final class ThumbsUpDownRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0zm0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M10.06 5H5.82l.66-3.18c.08-.37-.04-.75-.3-1.02C5.74.36 5.03.36 4.6.8l-4 4c-.39.37-.6.88-.6 1.41V12c0 1.1.9 2 2 2h5.92c.8 0 1.52-.48 1.84-1.21l2.14-5C12.46 6.47 11.49 5 10.06 5zM22 10h-5.92c-.8 0-1.52.48-1.84 1.21l-2.14 5c-.56 1.32.4 2.79 1.84 2.79h4.24l-.66 3.18c-.08.37.04.75.3 1.02.44.44 1.15.44 1.58 0l4-4c.38-.38.59-.88.59-1.41V12c.01-1.1-.89-2-1.99-2z');
        $doc->addChild($l0I1);
    }
}
