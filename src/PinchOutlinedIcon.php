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
final class PinchOutlinedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M6,2.5V1h5v5H9.5V3.56L3.56,9.5H6V11H1V6h1.5v2.44L8.44,2.5H6z M21.89,13.77l-3.8-1.67C17.96,12.04,17.81,12,17.65,12H17 V7.5C17,6.12,15.88,5,14.5,5S12,6.12,12,7.5v8.15l-1.87-0.4c-0.19-0.03-1.02-0.15-1.73,0.56L7,17.22l5.12,5.19 C12.49,22.79,13,23,13.53,23h6.55c0.98,0,1.81-0.7,1.97-1.67l0.92-5.44C23.12,15.03,22.68,14.17,21.89,13.77z M20.08,21h-6.55 l-3.7-3.78L14,18.11V7.5C14,7.22,14.22,7,14.5,7S15,7.22,15,7.5v6.18h1.76L21,15.56L20.08,21z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
