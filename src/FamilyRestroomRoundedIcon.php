<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['places'],
    tags: ['bathroom', 'child', 'children', 'family', 'father', 'kids', 'mother', 'parents', 'restroom', 'wc'],
)]
final class FamilyRestroomRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M16,4c0-1.11,0.89-2,2-2s2,0.89,2,2s-0.89,2-2,2S16,5.11,16,4z M20,21v-5h1.11c0.68,0,1.16-0.67,0.95-1.32l-2.1-6.31 C19.68,7.55,18.92,7,18.06,7h-0.12c-0.86,0-1.63,0.55-1.9,1.37l-0.86,2.58C16.26,11.55,17,12.68,17,14v8h2C19.55,22,20,21.55,20,21 z M12.5,11.5c0.83,0,1.5-0.67,1.5-1.5s-0.67-1.5-1.5-1.5S11,9.17,11,10S11.67,11.5,12.5,11.5z M5.5,6c1.11,0,2-0.89,2-2 s-0.89-2-2-2s-2,0.89-2,2S4.39,6,5.5,6z M7.5,21v-6H8c0.55,0,1-0.45,1-1V9c0-1.1-0.9-2-2-2H4C2.9,7,2,7.9,2,9v5c0,0.55,0.45,1,1,1 h0.5v6c0,0.55,0.45,1,1,1h2C7.05,22,7.5,21.55,7.5,21z M10,14v3c0,0.55,0.45,1,1,1h0v3c0,0.55,0.45,1,1,1h1c0.55,0,1-0.45,1-1v-3h0 c0.55,0,1-0.45,1-1v-3c0-0.82-0.68-1.5-1.5-1.5h-2C10.68,12.5,10,13.18,10,14');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
