<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ThunderstormRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M17.92,7.02C17.45,4.18,14.97,2,12,2C9.82,2,7.83,3.18,6.78,5.06C4.09,5.41,2,7.74,2,10.5C2,13.53,4.47,16,7.5,16h10 c2.48,0,4.5-2.02,4.5-4.5C22,9.16,20.21,7.23,17.92,7.02z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M15.95,20.11l-0.84-0.42l0.9-1.03c0.36-0.42,0.32-1.05-0.09-1.41c-0.42-0.36-1.05-0.32-1.41,0.09l-1.75,2 c-0.2,0.23-0.29,0.55-0.23,0.85c0.06,0.3,0.26,0.56,0.53,0.7l0.84,0.42L13,22.34c-0.36,0.42-0.32,1.05,0.09,1.41 c0.19,0.17,0.42,0.25,0.66,0.25c0.28,0,0.55-0.12,0.75-0.34l1.75-2c0.2-0.23,0.29-0.55,0.23-0.85 C16.42,20.5,16.22,20.24,15.95,20.11z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M9.95,20.11L9.1,19.68l0.9-1.03c0.36-0.42,0.32-1.05-0.09-1.41c-0.42-0.36-1.05-0.32-1.41,0.09l-1.75,2 c-0.2,0.23-0.29,0.55-0.23,0.85c0.06,0.3,0.26,0.56,0.53,0.7l0.84,0.42L7,22.34c-0.36,0.42-0.32,1.05,0.09,1.41 C7.28,23.92,7.52,24,7.75,24c0.28,0,0.55-0.12,0.75-0.34l1.75-2c0.2-0.23,0.29-0.55,0.23-0.85C10.42,20.5,10.22,20.24,9.95,20.11z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
