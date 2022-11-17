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
    tags: ['back', 'backpack', 'bag', 'book', 'bookbag', 'knapsack', 'pack', 'storage', 'travel'],
)]
final class BackpackRoundedIcon extends SVG
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
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M20,8v12c0,1.1-0.9,2-2,2H6c-1.1,0-2-0.9-2-2V8c0-1.86,1.28-3.41,3-3.86V3.5C7,2.67,7.67,2,8.5,2h0 C9.33,2,10,2.67,10,3.5V4h4V3.5C14,2.67,14.67,2,15.5,2h0C16.33,2,17,2.67,17,3.5v0.64C18.72,4.59,20,6.14,20,8z M6,13L6,13 c0,0.55,0.45,1,1,1h9v1c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-2c0-0.55-0.45-1-1-1H7C6.45,12,6,12.45,6,13z');
        $l2I0->addChild($l3I0);
        $l1I1->addChild($l2I0);
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
