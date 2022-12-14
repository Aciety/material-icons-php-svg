<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['bill', 'card', 'cash', 'coin', 'commerce', 'cost', 'credit', 'currency', 'dollars', 'finance', 'money', 'online', 'pay', 'payment', 'price', 'rupee', 'shopping', 'symbol'],
)]
final class CurrencyRupeeRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M10.5,14H9.77l5.1,5.31c0.61,0.64,0.16,1.69-0.72,1.69c-0.27,0-0.53-0.11-0.72-0.31L7.4,14.41C7.14,14.15,7,13.79,7,13.43 C7,12.64,7.64,12,8.43,12h2.07c1.76,0,3.22-1.3,3.46-3L7,9C6.45,9,6,8.55,6,8s0.45-1,1-1l6.66,0C13.1,5.82,11.9,5,10.5,5L7,5 C6.45,5,6,4.55,6,4s0.45-1,1-1h10c0.55,0,1,0.45,1,1s-0.45,1-1,1l-2.26,0c0.48,0.58,0.84,1.26,1.05,2L17,7c0.55,0,1,0.45,1,1 s-0.45,1-1,1l-1.02,0C15.72,11.8,13.36,14,10.5,14z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
