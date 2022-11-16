<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class NoFoodSharpIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M11.35,8.52L11,5h5V1h2v4h5l-1.38,13.79L18,15.17L11.35,8.52z M21.9,21.9L2.1,2.1L0.69,3.51l5.7,5.7 C3.46,9.83,1,11.76,1,15h11.17l2,2H1v2h15v-0.17l4.49,4.49L21.9,21.9z M1,23h15v-2H1V23z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
