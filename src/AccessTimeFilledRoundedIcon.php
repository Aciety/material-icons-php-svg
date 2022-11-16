<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class AccessTimeFilledRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M11.99,2C6.47,2,2,6.48,2,12s4.47,10,9.99,10C17.52,22,22,17.52,22,12S17.52,2,11.99,2z M16,16 c-0.39,0.39-1.02,0.39-1.41,0l-3.29-3.29C11.11,12.52,11,12.27,11,12V8c0-0.55,0.45-1,1-1h0c0.55,0,1,0.45,1,1v3.59l3,3 C16.39,14.98,16.39,15.61,16,16z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
