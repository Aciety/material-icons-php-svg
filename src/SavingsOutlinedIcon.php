<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['bank', 'bill', 'card', 'cash', 'coin', 'commerce', 'cost', 'credit', 'currency', 'dollars', 'finance', 'money', 'online', 'pay', 'payment', 'pig', 'piggy', 'savings', 'symbol'],
)]
final class SavingsOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M15,10c0-0.55,0.45-1,1-1s1,0.45,1,1c0,0.55-0.45,1-1,1S15,10.55,15,10z M8,9h5V7H8V9z M22,7.5v6.97l-2.82,0.94L17.5,21 L12,21v-2h-2v2l-5.5,0C4.5,21,2,12.54,2,9.5S4.46,4,7.5,4l5,0c0.91-1.21,2.36-2,4-2C17.33,2,18,2.67,18,3.5 c0,0.21-0.04,0.4-0.12,0.58c-0.14,0.34-0.26,0.73-0.32,1.15l2.27,2.27H22z M20,9.5h-1L15.5,6c0-0.65,0.09-1.29,0.26-1.91 C14.79,4.34,14,5.06,13.67,6L7.5,6C5.57,6,4,7.57,4,9.5c0,1.88,1.22,6.65,2.01,9.5L8,19v-2h6v2l2.01,0l1.55-5.15L20,13.03V9.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
