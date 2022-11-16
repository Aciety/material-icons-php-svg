<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class LiquorRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGGroup();
        $l4I0 = new SVGPath(d: 'M3,14c0,1.3,0.84,2.4,2,2.82V20H4c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h4c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H7 v-3.18C8.16,16.4,9,15.3,9,14V7c0-0.55-0.45-1-1-1H4C3.45,6,3,6.45,3,7V14z M5,8h2v3H5V8z');
        $l3I0->addChild($l4I0);
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGGroup();
        $l4I0 = new SVGPath(d: 'M20.64,8.54l-0.96-0.32C19.27,8.08,19,7.7,19,7.27V3c0-0.55-0.45-1-1-1h-3c-0.55,0-1,0.45-1,1v4.28 c0,0.43-0.27,0.81-0.68,0.95l-0.96,0.32C11.55,8.83,11,9.59,11,10.45V20c0,1.1,0.9,2,2,2h7c1.1,0,2-0.9,2-2v-9.56 C22,9.58,21.45,8.82,20.64,8.54z M16,4h1v1h-1V4z M13,10.44l0.95-0.32C15.18,9.72,16,8.57,16,7.28V7h1v0.28 c0,1.29,0.82,2.44,2.05,2.85L20,10.44V12h-7V10.44z M20,20h-7v-2h7V20z');
        $l3I1->addChild($l4I0);
        $l2I0->addChild($l3I1);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
