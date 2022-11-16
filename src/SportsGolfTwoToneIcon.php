<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SportsGolfTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M12,14c2.76,0,5-2.24,5-5s-2.24-5-5-5S7,6.24,7,9S9.24,14,12,14z M14,7c0.55,0,1,0.45,1,1 c0,0.55-0.45,1-1,1s-1-0.45-1-1C13,7.45,13.45,7,14,7z M12,5c0.55,0,1,0.45,1,1c0,0.55-0.45,1-1,1s-1-0.45-1-1 C11,5.45,11.45,5,12,5z M10,7c0.55,0,1,0.45,1,1c0,0.55-0.45,1-1,1S9,8.55,9,8C9,7.45,9.45,7,10,7z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,16c3.87,0,7-3.13,7-7c0-3.87-3.13-7-7-7C8.13,2,5,5.13,5,9C5,12.87,8.13,16,12,16z M12,4c2.76,0,5,2.24,5,5 s-2.24,5-5,5s-5-2.24-5-5S9.24,4,12,4z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '10', cy: '8', r: '1');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '14', cy: '8', r: '1');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGCircle(cx: '12', cy: '6', r: '1');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M7,19h2c1.1,0,2,0.9,2,2v1h2v-1c0-1.1,0.9-2,2-2h2v-2H7V19z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
