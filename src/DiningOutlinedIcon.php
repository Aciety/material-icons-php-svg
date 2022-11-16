<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class DiningOutlinedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M14.75,6c-1.37,0-2.5,1.52-2.5,3.4c0,1.48,0.7,2.71,1.67,3.18L14,12.62V19h1.5v-6.38l0.08-0.03 c0.97-0.47,1.67-1.7,1.67-3.18C17.25,7.53,16.13,6,14.75,6 M6.5,9.96 M10.5,6C10.23,6,10,6.22,10,6.5V9H9.25V6.5 c0-0.28-0.22-0.5-0.5-0.5s-0.5,0.22-0.5,0.5V9H7.5V6.5C7.5,6.22,7.28,6,7,6S6.5,6.22,6.5,6.5v3.8c0,0.93,0.64,1.71,1.5,1.93V19h1.5 v-6.77c0.86-0.22,1.5-1,1.5-1.93V6.5C11,6.22,10.78,6,10.5,6z M20,4H4v16h16V4 M20,2c1.1,0,2,0.9,2,2v16c0,1.1-0.9,2-2,2H4 c-1.1,0-2-0.9-2-2V4c0-1.1,0.9-2,2-2H20z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
