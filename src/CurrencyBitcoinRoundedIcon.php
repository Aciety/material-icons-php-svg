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
    tags: ['bill', 'blockchain', 'card', 'cash', 'coin', 'commerce', 'cost', 'credit', 'currency', 'digital', 'dollars', 'finance', 'franc', 'money', 'online', 'pay', 'payment', 'price', 'shopping', 'symbol'],
)]
final class CurrencyBitcoinRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M10,7h4c1.1,0,2,0.9,2,2s-0.9,2-2,2h-4V7z M15,17h-5v-4h5c1.1,0,2,0.9,2,2S16.1,17,15,17z M15,4c0-0.55-0.45-1-1-1 s-1,0.45-1,1v1h-2V4c0-0.55-0.45-1-1-1S9,3.45,9,4v1H7C6.45,5,6,5.45,6,6s0.45,1,1,1h1v10H7c-0.55,0-1,0.45-1,1s0.45,1,1,1h2v1 c0,0.55,0.45,1,1,1s1-0.45,1-1v-1h2v1c0,0.55,0.45,1,1,1s1-0.45,1-1v-1c2.21,0,4-1.79,4-4c0-1.45-0.78-2.73-1.94-3.43 C17.65,10.88,18,9.98,18,9c0-1.86-1.27-3.43-3-3.87L15,4z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
