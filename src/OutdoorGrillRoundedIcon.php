<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['barbecue', 'bbq', 'charcoal', 'cooking', 'grill', 'home', 'house', 'outdoor', 'outside'],
)]
final class OutdoorGrillRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M17,22c1.66,0,3-1.34,3-3s-1.34-3-3-3c-1.3,0-2.4,0.84-2.82,2H9.14l1.99-3.06C11.42,14.98,11.71,15,12,15 s0.58-0.02,0.87-0.06l1.02,1.57c0.42-0.53,0.96-0.95,1.6-1.21l-0.6-0.93c2.1-0.95,3.64-2.9,4.02-5.24C19.01,8.54,18.52,8,17.92,8 C15.31,8,8.69,8,6.08,8C5.48,8,4.99,8.54,5.09,9.14c0.38,2.34,1.93,4.29,4.02,5.24l-3.95,6.08c-0.3,0.46-0.17,1.08,0.29,1.38h0 c0.46,0.3,1.08,0.17,1.38-0.29l1-1.55h6.34C14.6,21.16,15.7,22,17,22z M17,18c0.55,0,1,0.45,1,1c0,0.55-0.45,1-1,1s-1-0.45-1-1 C16,18.45,16.45,18,17,18z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M9.5,6.47C9.48,6.75,9.68,7,9.96,7H10c0.24,0,0.44-0.18,0.46-0.42c0.1-0.87,0.04-1.39-0.94-2.54 C9.16,3.61,8.92,3.35,8.99,2.49C9.02,2.23,8.8,2,8.53,2H8.48C8.24,2,8.03,2.19,8.01,2.43c-0.08,0.93,0.2,1.74,0.95,2.53 C9.15,5.17,9.6,5.52,9.5,6.47z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M11.99,6.47C11.96,6.75,12.17,7,12.45,7h0.03c0.24,0,0.44-0.18,0.46-0.42c0.1-0.87,0.04-1.39-0.94-2.54 c-0.36-0.43-0.61-0.69-0.53-1.55C11.5,2.23,11.28,2,11.01,2h-0.05c-0.24,0-0.45,0.19-0.47,0.43c-0.08,0.93,0.2,1.74,0.95,2.53 C11.63,5.17,12.08,5.52,11.99,6.47z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M14.5,6.47C14.48,6.75,14.68,7,14.96,7H15c0.24,0,0.44-0.18,0.46-0.42c0.1-0.87,0.04-1.39-0.94-2.54 c-0.36-0.43-0.61-0.69-0.53-1.55C14.02,2.23,13.8,2,13.53,2h-0.05c-0.24,0-0.45,0.19-0.47,0.43c-0.08,0.93,0.2,1.74,0.95,2.53 C14.15,5.17,14.6,5.52,14.5,6.47z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
