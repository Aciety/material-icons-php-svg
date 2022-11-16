<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ViewComfyRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M2,5v5c0,0.55,0.45,1,1,1h18c0.55,0,1-0.45,1-1V5c0-0.55-0.45-1-1-1H3C2.45,4,2,4.45,2,5z M11,20h10c0.55,0,1-0.45,1-1v-5 c0-0.55-0.45-1-1-1H11c-0.55,0-1,0.45-1,1v5C10,19.55,10.45,20,11,20z M3,20h4c0.55,0,1-0.45,1-1v-5c0-0.55-0.45-1-1-1H3 c-0.55,0-1,0.45-1,1v5C2,19.55,2.45,20,3,20z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
