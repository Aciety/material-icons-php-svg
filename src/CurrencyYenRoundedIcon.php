<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['bill', 'card', 'cash', 'coin', 'commerce', 'cost', 'credit', 'currency', 'dollars', 'finance', 'money', 'online', 'pay', 'payment', 'price', 'shopping', 'symbol', 'yen'],
)]
final class CurrencyYenRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M6.82,3c0.34,0,0.66,0.17,0.84,0.46L12,10.29l4.34-6.83C16.52,3.17,16.84,3,17.18,3c0.79,0,1.27,0.87,0.84,1.54L13.92,11 H17c0.55,0,1,0.45,1,1c0,0.55-0.45,1-1,1h-4v2h4c0.55,0,1,0.45,1,1c0,0.55-0.45,1-1,1h-4v3c0,0.55-0.45,1-1,1s-1-0.45-1-1v-3H7 c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1h4v-2H7c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1h3.08L5.98,4.54C5.55,3.87,6.03,3,6.82,3z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
