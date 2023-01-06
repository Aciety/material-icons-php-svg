<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: ['bathroom', 'child', 'children', 'family', 'father', 'kids', 'mother', 'parents', 'restroom', 'wc'],
)]
final class FamilyRestroomOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M16,4c0-1.11,0.89-2,2-2s2,0.89,2,2s-0.89,2-2,2S16,5.11,16,4z M20,22v-6h2.5l-2.54-7.63C19.68,7.55,18.92,7,18.06,7h-0.12 c-0.86,0-1.63,0.55-1.9,1.37l-0.86,2.58C16.26,11.55,17,12.68,17,14v8H20z M12.5,11.5c0.83,0,1.5-0.67,1.5-1.5s-0.67-1.5-1.5-1.5 S11,9.17,11,10S11.67,11.5,12.5,11.5z M5.5,6c1.11,0,2-0.89,2-2s-0.89-2-2-2s-2,0.89-2,2S4.39,6,5.5,6z M7.5,22v-7H9V9 c0-1.1-0.9-2-2-2H4C2.9,7,2,7.9,2,9v6h1.5v7H7.5z M14,22v-4h1v-4c0-0.82-0.68-1.5-1.5-1.5h-2c-0.82,0-1.5,0.68-1.5,1.5v4h1v4H14z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
