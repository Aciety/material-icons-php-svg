<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class CastleRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M22,9c-0.55,0-1,0.45-1,1v1h-2V4c0-0.55-0.45-1-1-1s-1,0.45-1,1v1h-2V4c0-0.55-0.45-1-1-1s-1,0.45-1,1v1h-2V4 c0-0.55-0.45-1-1-1S9,3.45,9,4v1H7V4c0-0.55-0.45-1-1-1S5,3.45,5,4v7H3v-1c0-0.55-0.45-1-1-1s-1,0.45-1,1v9c0,1.1,0.9,2,2,2h7v-3 c0-1.1,0.9-2,2-2s2,0.9,2,2v3h7c1.1,0,2-0.9,2-2v-9C23,9.45,22.55,9,22,9z M11,12H9V9h2V12z M15,12h-2V9h2V12z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
