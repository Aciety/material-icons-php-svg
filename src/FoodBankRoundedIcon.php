<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['places'],
    tags: ['architecture', 'bank', 'building', 'charity', 'eat', 'estate', 'food', 'fork', 'house', 'knife', 'meal', 'place', 'real', 'residence', 'residential', 'shelter', 'utensils'],
)]
final class FoodBankRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M10.8,3.9l-6,4.5C4.3,8.78,4,9.37,4,10v9c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-9c0-0.63-0.3-1.22-0.8-1.6l-6-4.5 C12.49,3.37,11.51,3.37,10.8,3.9z M12.5,12.5c0,0.83-0.67,1.5-1.5,1.5v3.5c0,0.28-0.22,0.5-0.5,0.5h0c-0.28,0-0.5-0.22-0.5-0.5V14 c-0.83,0-1.5-0.67-1.5-1.5V10c0-0.28,0.22-0.5,0.5-0.5h0c0.28,0,0.5,0.22,0.5,0.5v2.5H10V10c0-0.28,0.22-0.5,0.5-0.5h0 c0.28,0,0.5,0.22,0.5,0.5v2.5h0.5V10c0-0.28,0.22-0.5,0.5-0.5h0c0.28,0,0.5,0.22,0.5,0.5V12.5z M14.5,18L14.5,18 c-0.28,0-0.5-0.22-0.5-0.5v-3h-0.5c-0.28,0-0.5-0.22-0.5-0.5v-2.5c0-0.88,0.57-1.63,1.36-1.89C14.67,9.5,15,9.75,15,10.09v7.41 C15,17.78,14.78,18,14.5,18z');
        $doc->addChild($l0I1);
    }
}
