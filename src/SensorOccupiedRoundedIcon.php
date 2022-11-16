<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SensorOccupiedRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M12,11c1.66,0,3-1.34,3-3s-1.34-3-3-3S9,6.34,9,8S10.34,11,12,11z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,12c-1.84,0-3.56,0.5-5.03,1.37C6.36,13.73,6,14.39,6,15.09L6,16c0,0.55,0.45,1,1,1h10c0.55,0,1-0.45,1-1l0-0.91 c0-0.7-0.36-1.36-0.97-1.72C15.56,12.5,13.84,12,12,12z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M22.11,7.79L22.11,7.79c0.55-0.23,0.78-0.88,0.5-1.41c-1.13-2.12-2.87-3.86-4.99-4.99c-0.52-0.28-1.17-0.04-1.4,0.5v0 c-0.19,0.47-0.01,1.02,0.43,1.25c1.79,0.94,3.26,2.42,4.21,4.21C21.09,7.8,21.64,7.98,22.11,7.79z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M7.79,1.89L7.79,1.89c-0.23-0.55-0.88-0.78-1.4-0.5C4.27,2.52,2.52,4.26,1.4,6.38c-0.28,0.52-0.05,1.18,0.5,1.41l0,0 c0.47,0.2,1.02,0.01,1.25-0.43c0.94-1.79,2.42-3.26,4.21-4.21C7.8,2.91,7.98,2.36,7.79,1.89z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M1.89,16.21L1.89,16.21c-0.55,0.23-0.78,0.88-0.5,1.4c1.13,2.12,2.87,3.87,5,5c0.52,0.28,1.17,0.04,1.4-0.5l0,0 c0.19-0.47,0.01-1.02-0.43-1.25c-1.79-0.94-3.26-2.42-4.21-4.21C2.91,16.2,2.36,16.02,1.89,16.21z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M16.21,22.11L16.21,22.11c0.23,0.55,0.88,0.78,1.4,0.5c2.12-1.13,3.87-2.87,5-5c0.28-0.52,0.04-1.17-0.5-1.4h0 c-0.47-0.19-1.02-0.01-1.25,0.43c-0.94,1.79-2.42,3.26-4.21,4.21C16.2,21.09,16.02,21.64,16.21,22.11z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
