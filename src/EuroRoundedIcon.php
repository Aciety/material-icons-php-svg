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
    tags: ['bill', 'card', 'cash', 'coin', 'commerce', 'cost', 'credit', 'currency', 'dollars', 'euro', 'euros', 'finance', 'money', 'online', 'pay', 'payment', 'price', 'shopping', 'symbol'],
)]
final class EuroRoundedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M15,18.5c-2.51,0-4.68-1.42-5.76-3.5h5.14c0.38,0,0.73-0.21,0.89-0.55l0,0c0.33-0.66-0.15-1.45-0.89-1.45h-5.8 c-0.05-0.33-0.08-0.66-0.08-1s0.03-0.67,0.08-1h5.8c0.38,0,0.73-0.21,0.89-0.55l0,0C15.61,9.78,15.13,9,14.38,9H9.24 C10.32,6.92,12.5,5.5,15,5.5c1.25,0,2.42,0.36,3.42,0.97c0.5,0.31,1.15,0.26,1.57-0.16l0,0c0.58-0.58,0.45-1.53-0.25-1.96 C18.36,3.5,16.73,3,15,3c-3.92,0-7.24,2.51-8.48,6h-2.9C3.24,9,2.89,9.21,2.72,9.55l0,0C2.39,10.22,2.87,11,3.62,11h2.44 C6.02,11.33,6,11.66,6,12s0.02,0.67,0.06,1H3.62c-0.38,0-0.73,0.21-0.89,0.55l0,0C2.39,14.22,2.87,15,3.62,15h2.9 c1.24,3.49,4.56,6,8.48,6c1.74,0,3.36-0.49,4.74-1.35c0.69-0.43,0.82-1.39,0.24-1.97l0,0c-0.42-0.42-1.07-0.47-1.57-0.15 C17.42,18.15,16.26,18.5,15,18.5z');
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
