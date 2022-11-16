<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class AddModeratorOutlinedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M6,11.09v-4.7l6-2.25l6,2.25v3.69c0.71,0.1,1.38,0.31,2,0.6V5l-8-3L4,5v6.09c0,5.05,3.41,9.76,8,10.91 c0.03-0.01,0.05-0.02,0.08-0.02c-0.79-0.78-1.4-1.76-1.75-2.84C7.76,17.53,6,14.42,6,11.09z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M17,12c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5S19.76,12,17,12z M20,17.5h-2.5V20h-1v-2.5H14v-1h2.5V14h1v2.5H20V17.5z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
