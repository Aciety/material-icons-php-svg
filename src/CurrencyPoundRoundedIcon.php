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
    tags: ['bill', 'card', 'cash', 'coin', 'commerce', 'cost', 'credit', 'currency', 'dollars', 'finance', 'money', 'online', 'pay', 'payment', 'pound', 'price', 'shopping', 'symbol'],
)]
final class CurrencyPoundRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M17.21,17.61c-0.47-0.24-1.03-0.05-1.31,0.4C15.54,18.61,14.93,19,14,19l-4.9,0c0.83-1,1.5-2.34,1.5-4 c0-0.35-0.03-0.69-0.08-1L13,14c0.55,0,1-0.45,1-1s-0.45-1-1-1l-3.18,0C9,10.42,8,9.6,8,8c0-1.93,1.57-3.5,3.5-3.5 c1.2,0,2.26,0.61,2.89,1.53c0.27,0.4,0.77,0.59,1.22,0.4c0.6-0.25,0.8-0.99,0.43-1.53c-0.99-1.45-2.66-2.4-4.54-2.4 C8.46,2.5,6,4.96,6,8c0,1.78,0.79,2.9,1.49,4L7,12c-0.55,0-1,0.45-1,1s0.45,1,1,1l1.47,0c0.08,0.31,0.13,0.64,0.13,1 c0,1.9-1.29,3.11-2.06,3.66C6.2,18.9,6,19.29,6,19.71v0C6,20.42,6.58,21,7.29,21H14c1.55,0,2.95-0.76,3.63-2 C17.91,18.49,17.72,17.86,17.21,17.61z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
