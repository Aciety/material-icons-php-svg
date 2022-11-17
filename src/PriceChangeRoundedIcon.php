<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['arrows', 'bill', 'card', 'cash', 'change', 'coin', 'commerce', 'cost', 'credit', 'currency', 'dollars', 'down', 'finance', 'money', 'online', 'pay', 'payment', 'price', 'shopping', 'symbol', 'up'],
)]
final class PriceChangeRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M20,4H4C2.89,4,2.01,4.89,2.01,6L2,18c0,1.11,0.89,2,2,2h16c1.11,0,2-0.89,2-2V6C22,4.89,21.11,4,20,4z M11,10H8v1h3 c0.55,0,1,0.45,1,1v3c0,0.55-0.45,1-1,1h-1v0c0,0.55-0.45,1-1,1h0c-0.55,0-1-0.45-1-1v0H7c-0.55,0-1-0.45-1-1v0c0-0.55,0.45-1,1-1 h3v-1H7c-0.55,0-1-0.45-1-1V9c0-0.55,0.45-1,1-1h1v0c0-0.55,0.45-1,1-1h0c0.55,0,1,0.45,1,1v0h1c0.55,0,1,0.45,1,1v0 C12,9.55,11.55,10,11,10z M15.65,15.9L14,14.25h4l-1.65,1.65C16.16,16.09,15.84,16.09,15.65,15.9z M14,10l1.65-1.65 c0.2-0.2,0.51-0.2,0.71,0L18,10H14z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
