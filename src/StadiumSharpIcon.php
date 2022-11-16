<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class StadiumSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M7,5L3,7V3L7,5z M18,3v4l4-2L18,3z M11,2v4l4-2L11,2z M5,10.04C6.38,10.53,8.77,11,12,11s5.62-0.47,7-0.96 C19,9.86,16.22,9,12,9S5,9.86,5,10.04z M15,17H9l0,4.88C4.94,21.49,2,20.34,2,19v-9c0-1.66,4.48-3,10-3s10,1.34,10,3v9 c0,1.34-2.94,2.48-7,2.87L15,17z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
