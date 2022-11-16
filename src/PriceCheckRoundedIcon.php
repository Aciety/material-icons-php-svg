<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class PriceCheckRoundedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M11,13V9c0-0.55-0.45-1-1-1H6V6h4c0.55,0,1-0.45,1-1s-0.45-1-1-1H8.5c0-0.55-0.45-1-1-1s-1,0.45-1,1H5C4.45,4,4,4.45,4,5 v4c0,0.55,0.45,1,1,1h4v2H5c-0.55,0-1,0.45-1,1s0.45,1,1,1h1.5c0,0.55,0.45,1,1,1s1-0.45,1-1H10C10.55,14,11,13.55,11,13z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M18.88,13.22l-4.95,4.95l-2.12-2.12c-0.39-0.39-1.02-0.39-1.41,0l0,0c-0.39,0.39-0.39,1.02,0,1.41l2.83,2.83 c0.39,0.39,1.02,0.39,1.41,0l5.66-5.66c0.39-0.39,0.39-1.02,0-1.41v0C19.9,12.83,19.27,12.83,18.88,13.22z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
