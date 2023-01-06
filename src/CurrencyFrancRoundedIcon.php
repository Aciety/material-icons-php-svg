<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['bill', 'card', 'cash', 'coin', 'commerce', 'cost', 'credit', 'currency', 'dollars', 'finance', 'franc', 'money', 'online', 'pay', 'payment', 'price', 'shopping', 'symbol'],
)]
final class CurrencyFrancRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M18,4c0-0.55-0.45-1-1-1H8C7.45,3,7,3.45,7,4v12H6c-0.55,0-1,0.45-1,1s0.45,1,1,1h1v2c0,0.55,0.45,1,1,1h0 c0.55,0,1-0.45,1-1v-2h3c0.55,0,1-0.45,1-1s-0.45-1-1-1H9v-3h7c0.55,0,1-0.45,1-1c0-0.55-0.45-1-1-1H9V5h8C17.55,5,18,4.55,18,4z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
