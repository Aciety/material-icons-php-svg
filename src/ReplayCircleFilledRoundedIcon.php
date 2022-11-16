<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ReplayCircleFilledRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M18,12.74c-0.12,3.09-2.67,5.64-5.76,5.76 c-3.01,0.12-5.56-1.99-6.12-4.82C5.99,13.07,6.48,12.5,7.1,12.5h0c0.47,0,0.88,0.33,0.98,0.8c0.42,2.07,2.44,3.57,4.72,3.12 c1.56-0.3,2.82-1.56,3.12-3.12c0.5-2.56-1.45-4.8-3.92-4.8v1.79c0,0.45-0.54,0.67-0.85,0.35L8.35,7.85c-0.2-0.2-0.2-0.51,0-0.71 l2.79-2.79C11.46,4.04,12,4.26,12,4.71V6.5C15.39,6.5,18.13,9.32,18,12.74z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
