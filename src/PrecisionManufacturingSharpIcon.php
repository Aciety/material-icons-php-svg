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
    tags: ['arm', 'automatic', 'chain', 'conveyor', 'crane', 'factory', 'industry', 'machinery', 'manufacturing', 'mechanical', 'precision', 'production', 'repairing', 'robot', 'supply', 'warehouse'],
)]
final class PrecisionManufacturingSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M14,10V9.82l2.01,2.01l5.23-2.44l-0.63-1.36l-4.28,2L14,7.7V6.3l2.33-2.33l4.28,2l0.63-1.36l-5.23-2.44L14,4.18V4h-2v2 H8.82C8.4,4.84,7.3,4,6,4C4.34,4,3,5.34,3,7c0,1.1,0.6,2.05,1.48,2.58L7.08,18H4v3h13v-3h-3.62L8.41,8.76 C8.58,8.53,8.72,8.28,8.82,8H12v2H14z M6,8C5.45,8,5,7.55,5,7c0-0.55,0.45-1,1-1s1,0.45,1,1C7,7.55,6.55,8,6,8z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
