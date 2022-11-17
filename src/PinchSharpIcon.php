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
final class PinchSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M23.18,15.4L22.1,23h-9L8,17.62l1.22-1.23L13,17.24V6.5C13,5.67,13.67,5,14.5,5S16,5.67,16,6.5v6h1.38L23.18,15.4z M6,2.5 V1h5v5H9.5V3.56L3.56,9.5H6V11H1V6h1.5v2.44L8.44,2.5H6z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
