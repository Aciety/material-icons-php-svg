<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class GridGoldenratioRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M21,13h-6v-2h6c0.55,0,1-0.45,1-1s-0.45-1-1-1h-6V3c0-0.55-0.45-1-1-1s-1,0.45-1,1v6h-2V3c0-0.55-0.45-1-1-1S9,2.45,9,3v6 H3c-0.55,0-1,0.45-1,1s0.45,1,1,1h6v2H3c-0.55,0-1,0.45-1,1s0.45,1,1,1h6v6c0,0.55,0.45,1,1,1s1-0.45,1-1v-6h2v6c0,0.55,0.45,1,1,1 s1-0.45,1-1v-6h6c0.55,0,1-0.45,1-1S21.55,13,21,13z M13,13h-2v-2h2V13z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
