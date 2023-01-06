<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['image'],
    tags: ['movie', 'photos', 'play', 'slideshow', 'square', 'video', 'view'],
)]
final class SlideshowSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M10 8v8l5-4-5-4zm11-5H3v18h18V3zm-2 16H5V5h14v14z');
        $doc->addChild($l0I1);
    }
}
