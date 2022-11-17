<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['album', 'image', 'library', 'mountain', 'mountains', 'photo', 'photography', 'picture'],
)]
final class PhotoLibrarySharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22 18V2H6v16h16zm-11-6l2.03 2.71L16 11l4 5H8l3-4zM2 6v16h16v-2H4V6H2z');
        $doc->addChild($l0I1);
    }
}
