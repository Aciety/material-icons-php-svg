<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['bill', 'card', 'cash', 'coin', 'commerce', 'cost', 'credit', 'currency', 'dollars', 'finance', 'money', 'online', 'pay', 'payment', 'price', 'ruble', 'shopping', 'symbol'],
)]
final class CurrencyRubleRoundedIcon extends SVG
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
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M8,21c0.55,0,1-0.45,1-1v-2h3c0.55,0,1-0.45,1-1s-0.45-1-1-1H9v-2h4.5c3.22,0,5.79-2.76,5.47-6.04 C18.7,5.1,16.14,3,13.26,3l-0.96,0H8C7.45,3,7,3.45,7,4v8H6c-0.55,0-1,0.45-1,1c0,0.55,0.45,1,1,1h1v2H6c-0.55,0-1,0.45-1,1 s0.45,1,1,1h1v2C7,20.55,7.45,21,8,21z M13.5,12H9V5h4.5C15.43,5,17,6.57,17,8.5S15.43,12,13.5,12z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
