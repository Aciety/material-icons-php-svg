<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['automobile', 'car', 'cars', 'maps', 'repair', 'transportation', 'vehicle'],
)]
final class CarRepairIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M16.22,12c0.68,0,1.22-0.54,1.22-1.22c0-0.67-0.54-1.22-1.22-1.22S15,10.11,15,10.78C15,11.46,15.55,12,16.22,12z M6.56,10.78c0,0.67,0.54,1.22,1.22,1.22S9,11.46,9,10.78c0-0.67-0.54-1.22-1.22-1.22S6.56,10.11,6.56,10.78z M7.61,4L6.28,8h11.43 l-1.33-4H7.61z M16.28,3c0,0,0.54,0.01,0.92,0.54c0.02,0.02,0.03,0.04,0.05,0.07c0.07,0.11,0.14,0.24,0.19,0.4 C17.66,4.66,19,8.69,19,8.69v6.5c0,0.45-0.35,0.81-0.78,0.81h-0.44C17.35,16,17,15.64,17,15.19V14H7v1.19C7,15.64,6.65,16,6.22,16 H5.78C5.35,16,5,15.64,5,15.19v-6.5c0,0,1.34-4.02,1.55-4.69c0.05-0.16,0.12-0.28,0.19-0.4C6.77,3.58,6.78,3.56,6.8,3.54 C7.18,3.01,7.72,3,7.72,3H16.28z M4,17.01h16V19h-7v3h-2v-3H4V17.01z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
