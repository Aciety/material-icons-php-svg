<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class EmergencyShareIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M12,9c-3.15,0-6,2.41-6,6.15c0,2.49,2,5.44,6,8.85c4-3.41,6-6.36,6-8.85C18,11.41,15.15,9,12,9z M12,16.5 c-0.83,0-1.5-0.67-1.5-1.5s0.67-1.5,1.5-1.5s1.5,0.67,1.5,1.5S12.83,16.5,12,16.5z M12,4c1.93,0,3.68,0.78,4.95,2.05l-1.41,1.41 C14.63,6.56,13.38,6,12,6S9.37,6.56,8.46,7.46L7.05,6.05C8.32,4.78,10.07,4,12,4z M19.78,3.23l-1.41,1.41 C16.74,3.01,14.49,2,12.01,2S7.27,3.01,5.64,4.63L4.22,3.22C6.22,1.23,8.97,0,12.01,0S17.79,1.23,19.78,3.23z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
