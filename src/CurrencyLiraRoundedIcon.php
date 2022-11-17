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
    tags: ['bill', 'card', 'cash', 'coin', 'commerce', 'cost', 'credit', 'currency', 'dollars', 'finance', 'lira', 'money', 'online', 'pay', 'payment', 'price', 'shopping', 'symbol'],
)]
final class CurrencyLiraRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M9,15.84l-1.47,0.92C6.86,17.18,6,16.7,6,15.91c0-0.34,0.18-0.66,0.47-0.85L9,13.48v-2.36l-1.47,0.92 C6.86,12.46,6,11.98,6,11.19c0-0.34,0.18-0.66,0.47-0.85L9,8.76V4c0-0.55,0.45-1,1-1s1,0.45,1,1v3.51l2.47-1.55 C14.14,5.54,15,6.02,15,6.81c0,0.34-0.18,0.66-0.47,0.85L11,9.87l0.01,2.35l2.46-1.54c0.67-0.42,1.53,0.06,1.53,0.85 c0,0.34-0.18,0.66-0.47,0.85L11,14.59V19c2.47,0,4.52-1.79,4.93-4.15c0.08-0.49,0.49-0.85,0.98-0.85c0.61,0,1.09,0.54,1,1.14 C17.37,18.46,14.48,21,11,21h-1c-0.55,0-1-0.45-1-1V15.84z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
