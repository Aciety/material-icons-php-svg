<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class BedroomBabyOutlinedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M17.94,14.04c-0.34,0.34-0.71,0.64-1.1,0.92L16,13.5V11h1v-1h-5.62L9.65,7H6l1,0.76L5.5,9.5l0.95,1L8,9.51v3.99l-0.84,1.46 c-0.39-0.27-0.76-0.58-1.1-0.92L5,15.1c1.87,1.87,4.36,2.9,7,2.9s5.13-1.03,7-2.9L17.94,14.04z M8.45,15.71l0.03-0.06l0.81-1.41 c1.74,0.65,3.66,0.65,5.4,0l0.81,1.41l0.03,0.06c-1.1,0.51-2.3,0.79-3.55,0.79S9.55,16.23,8.45,15.71z M20,4v16H4V4H20 M20,2H4 C2.9,2,2,2.9,2,4v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
