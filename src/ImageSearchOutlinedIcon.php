<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['find', 'glass', 'image', 'landscape', 'look', 'magnify', 'magnifying', 'mountain', 'mountains', 'photo', 'photography', 'picture', 'search', 'see'],
)]
final class ImageSearchOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18 13v7H4V6h5.02c.05-.71.22-1.38.48-2H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-5l-2-2zm-1.5 5h-11l2.75-3.53 1.96 2.36 2.75-3.54L16.5 18zm2.8-9.11c.44-.7.7-1.51.7-2.39C20 4.01 17.99 2 15.5 2S11 4.01 11 6.5s2.01 4.5 4.49 4.5c.88 0 1.7-.26 2.39-.7L21 13.42 22.42 12 19.3 8.89zM15.5 9C14.12 9 13 7.88 13 6.5S14.12 4 15.5 4 18 5.12 18 6.5 16.88 9 15.5 9z');
        $doc->addChild($l0I1);
    }
}
