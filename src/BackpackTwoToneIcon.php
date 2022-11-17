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
final class BackpackTwoToneIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M18,20H6V8c0-1.1,0.9-2,2-2h8c1.1,0,2,0.9,2,2V20z M7.5,12v2h7v2h2v-4H7.5z');
        $l1I1->setStyle('opacity', '.3');
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M17,4.14V2h-3v2h-4V2H7v2.14C5.28,4.59,4,6.14,4,8v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V8C20,6.14,18.72,4.59,17,4.14z M18,20H6V8c0-1.1,0.9-2,2-2h8c1.1,0,2,0.9,2,2V20z M7.5,12v2h7v2h2v-4H7.5z');
        $l0I0->addChild($l1I2);
        $doc->addChild($l0I0);
    }
}
