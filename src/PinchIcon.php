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
    tags: ['arrow', 'arrows', 'compress', 'direction', 'finger', 'grasp', 'hand', 'navigation', 'nip', 'pinch', 'squeeze', 'tweak'],
)]
final class PinchIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M6,2.5V1h5v5H9.5V3.56L3.56,9.5H6V11H1V6h1.5v2.44L8.44,2.5H6z M22.98,16.82l-0.63,4.46C22.21,22.27,21.36,23,20.37,23 h-6.16c-0.53,0-1.29-0.21-1.66-0.59L8,17.62l0.83-0.84c0.24-0.24,0.58-0.35,0.92-0.28L13,17.24V6.5C13,5.67,13.67,5,14.5,5 S16,5.67,16,6.5v6h0.91c0.31,0,0.62,0.07,0.89,0.21l4.09,2.04C22.66,15.14,23.1,15.97,22.98,16.82z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
