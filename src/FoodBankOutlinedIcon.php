<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['places'],
    tags: ['architecture', 'bank', 'building', 'charity', 'eat', 'estate', 'food', 'fork', 'house', 'knife', 'meal', 'place', 'real', 'residence', 'residential', 'shelter', 'utensils'],
)]
final class FoodBankOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,5.5l6,4.5v9H6v-9L12,5.5 M12,3L4,9v12h16V9L12,3L12,3z M11.5,9.5v3H11v-3h-1v3H9.5v-3h-1v3c0,0.83,0.67,1.5,1.5,1.5v4h1 v-4c0.83,0,1.5-0.67,1.5-1.5v-3H11.5z M13,11.5v3h1V18h1V9.5C13.9,9.5,13,10.4,13,11.5z');
        $doc->addChild($l0I1);
    }
}
