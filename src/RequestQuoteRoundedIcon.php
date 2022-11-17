<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['file'],
    tags: ['bill', 'card', 'cash', 'coin', 'commerce', 'cost', 'credit', 'currency', 'dollars', 'finance', 'money', 'online', 'pay', 'payment', 'price', 'quote', 'request', 'shopping', 'symbol'],
)]
final class RequestQuoteRoundedIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M19.41,7.41l-4.83-4.83C14.21,2.21,13.7,2,13.17,2H6C4.9,2,4.01,2.9,4.01,4L4,20c0,1.1,0.89,2,1.99,2H18c1.1,0,2-0.9,2-2 V8.83C20,8.3,19.79,7.79,19.41,7.41z M14,13c0.55,0,1,0.45,1,1v3c0,0.55-0.45,1-1,1h-1c0,0.55-0.45,1-1,1s-1-0.45-1-1h-1 c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1h3v-1h-3c-0.55,0-1-0.45-1-1v-3c0-0.55,0.45-1,1-1h1c0-0.55,0.45-1,1-1s1,0.45,1,1h1 c0.55,0,1,0.45,1,1c0,0.55-0.45,1-1,1h-3v1H14z M14,8c-0.55,0-1-0.45-1-1V3.5L17.5,8H14z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
