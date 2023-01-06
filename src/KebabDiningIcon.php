<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['dining', 'dinner', 'food', 'kebab', 'meal', 'meat', 'skewer'],
)]
final class KebabDiningIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M7.75,8H11v5H7.75v1H8.5c1.38,0,2.5,1.12,2.5,2.5c0,1.38-1.12,2.5-2.5,2.5H7.75v4h-1.5v-4H5.5C4.12,19,3,17.88,3,16.5 C3,15.12,4.12,14,5.5,14h0.75v-1H3V8h3.25V7H5.5C4.12,7,3,5.88,3,4.5C3,3.12,4.12,2,5.5,2h0.75V1h1.5v1H8.5C9.88,2,11,3.12,11,4.5 C11,5.88,9.88,7,8.5,7H7.75V8z M17.75,7h0.75C19.88,7,21,5.88,21,4.5C21,3.12,19.88,2,18.5,2h-0.75V1h-1.5v1H15.5 C14.12,2,13,3.12,13,4.5C13,5.88,14.12,7,15.5,7h0.75v1H13v5h3.25v1H15.5c-1.38,0-2.5,1.12-2.5,2.5c0,1.38,1.12,2.5,2.5,2.5h0.75v4 h1.5v-4h0.75c1.38,0,2.5-1.12,2.5-2.5c0-1.38-1.12-2.5-2.5-2.5h-0.75v-1H21V8h-3.25V7z');
        $doc->addChild($l0I1);
    }
}
