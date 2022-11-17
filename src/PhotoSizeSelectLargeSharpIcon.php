<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['adjust', 'album', 'edit', 'editing', 'image', 'large', 'library', 'mountain', 'mountains', 'photo', 'photography', 'picture', 'select', 'size'],
)]
final class PhotoSizeSelectLargeSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21 15h2v2h-2v-2zm0 4h2v2h-2v-2zm0-8h2v2h-2v-2zm-8-8h2v2h-2V3zm8 4h2v2h-2V7zM1 7h2v2H1V7zm16-4h2v2h-2V3zm0 16h2v2h-2v-2zM3 3H1v2h2V3zm20 0h-2v2h2V3zM9 3h2v2H9V3zM5 3h2v2H5V3zm-4 8v10h14V11H1zm2 8l2.5-3.21 1.79 2.15 2.5-3.22L13 19H3z');
        $doc->addChild($l0I1);
    }
}
