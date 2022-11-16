<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class StairsRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M17,8h-1.42v3.33H13v3.33h-2.58 L10.45,18H7c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1h1.42v-3.33H11V9.33h2.58V6H17c0.55,0,1,0.45,1,1C18,7.55,17.55,8,17,8z');
        $l2I0->addChild($l3I0);
        $l1I1->addChild($l2I0);
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
