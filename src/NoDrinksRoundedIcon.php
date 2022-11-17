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
    tags: ['alcohol', 'beverage', 'bottle', 'cocktail', 'drink', 'drinks', 'food', 'liquor', 'no', 'wine'],
)]
final class NoDrinksRoundedIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M20.49,20.49L3.51,3.51c-0.39-0.39-1.02-0.39-1.41,0c-0.39,0.39-0.39,1.02,0,1.41l7.54,7.54L11,14v5H7c-0.55,0-1,0.45-1,1 s0.45,1,1,1h10c0.32,0,0.59-0.16,0.78-0.4l1.3,1.3c0.39,0.39,1.02,0.39,1.41,0C20.88,21.51,20.88,20.88,20.49,20.49z M13,19v-3.17 L16.17,19H13z M7.83,5l-2-2h13.72C20.35,3,21,3.65,21,4.45c0,0.35-0.13,0.7-0.37,0.96l-5.83,6.56L9.83,7h6.74l1.78-2H7.83z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
