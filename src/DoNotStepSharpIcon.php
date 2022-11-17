<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['places'],
    tags: ['boot', 'disabled', 'do', 'enabled', 'feet', 'foot', 'not', 'off', 'on', 'shoe', 'slash', 'sneaker', 'step'],
)]
final class DoNotStepSharpIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M1.39,4.22l8.24,8.24l-0.69,0.72L6.87,11.1c-0.11,0.4-0.26,0.78-0.45,1.12l1.75,1.75l-0.69,0.72l-1.63-1.63 c-0.24,0.29-0.5,0.56-0.77,0.8l1.63,1.63l-0.7,0.72l-1.74-1.74C2.83,15.43,1.34,15.82,1,15.92L1,20h9.5l3.33-3.33l5.94,5.94 l1.41-1.41L2.81,2.81L1.39,4.22z M18.51,15.68l-1.41-1.41l4.48-4.48L23,11.2L18.51,15.68z M20.88,9.08l-4.48,4.48L9.3,6.47L13.8,2 L20.88,9.08z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
