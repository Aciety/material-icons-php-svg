<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['image'],
    tags: ['bill', 'blockchain', 'card', 'cash', 'coin', 'commerce', 'cost', 'credit', 'currency', 'digital', 'dollars', 'finance', 'franc', 'money', 'online', 'pay', 'payment', 'price', 'shopping', 'symbol'],
)]
final class CurrencyBitcoinTwoToneIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M17.06,11.57C17.65,10.88,18,9.98,18,9c0-1.86-1.27-3.43-3-3.87L15,3h-2v2h-2V3H9v2H6v2h2v10H6v2h3v2h2v-2h2v2h2v-2 c2.21,0,4-1.79,4-4C19,13.55,18.22,12.27,17.06,11.57z M10,7h4c1.1,0,2,0.9,2,2s-0.9,2-2,2h-4V7z M15,17h-5v-4h5c1.1,0,2,0.9,2,2 S16.1,17,15,17z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
