<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class WomanRoundedIcon extends SVG
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
        $l1I0 = new SVGCircle(cx: '12', cy: '4', r: '2');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M16.45,14.63l-2.52-6.32c-0.32-0.79-1.08-1.3-1.94-1.31c-0.85,0-1.62,0.51-1.94,1.31l-2.52,6.32 C7.28,15.29,7.77,16,8.47,16H10v5c0,0.55,0.45,1,1,1h1h1c0.55,0,1-0.45,1-1v-5h1.53C16.23,16,16.72,15.29,16.45,14.63z');
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
