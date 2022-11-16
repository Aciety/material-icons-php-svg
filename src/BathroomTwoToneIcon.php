<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class BathroomTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M4,20h16V4H4V20z M9,18c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S9.55,18,9,18z M9,15c-0.55,0-1-0.45-1-1 s0.45-1,1-1s1,0.45,1,1S9.55,15,9,15z M12,18c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S12.55,18,12,18z M12,15 c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S12.55,15,12,15z M15,18c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S15.55,18,15,18z M15,15c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1S15.55,15,15,15z M7,11c0-2.76,2.24-5,5-5s5,2.24,5,5v1H7V11z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '15', cy: '14', r: '1');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '12', cy: '14', r: '1');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '15', cy: '17', r: '1');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M20,2H4C2.9,2,2,2.9,2,4v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M20,20H4V4h16V20z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M17,11c0-2.76-2.24-5-5-5s-5,2.24-5,5v1h10V11z M8.54,10.5c0.24-1.69,1.7-3,3.46-3s3.22,1.31,3.47,3H8.54z');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGCircle(cx: '9', cy: '17', r: '1');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGCircle(cx: '9', cy: '14', r: '1');
        $l1I0->addChild($l2I7);
        $l2I8 = new SVGCircle(cx: '12', cy: '17', r: '1');
        $l1I0->addChild($l2I8);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
