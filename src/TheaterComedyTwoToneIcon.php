<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class TheaterComedyTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M14.5,10.81C14.55,9.8,15.64,9,16.99,9c1.38,0,2.5,0.84,2.5,1.88H14.5v1.22c0.69,0.55,1.55,0.9,2.5,0.9 c2.21,0,4-1.79,4-4V4h-8v3.5h1.5V10.81z M19,5.5c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1S18.45,5.5,19,5.5z M14,6.5 c0-0.55,0.45-1,1-1s1,0.45,1,1s-0.45,1-1,1S14,7.05,14,6.5z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M11,2v5.5h2V4h8v5c0,2.21-1.79,4-4,4c-0.95,0-1.81-0.35-2.5-0.9v2.35C15.26,14.8,16.11,15,17,15c3.31,0,6-2.69,6-6V2H11z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '19', cy: '6.5', r: '1');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '15', cy: '6.5', r: '1');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M16.99,9c-1.35,0-2.44,0.8-2.49,1.81v0.07h4.99C19.49,9.84,18.37,9,16.99,9z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M1,16c0,3.31,2.69,6,6,6s6-2.69,6-6V9H1V16z M3,11h8v5c0,2.21-1.79,4-4,4s-4-1.79-4-4V11z');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M7,20c2.21,0,4-1.79,4-4v-5H3v5C3,18.21,4.79,20,7,20z M7,17.88c-1.38,0-2.5-0.84-2.5-1.88h5 C9.5,17.04,8.38,17.88,7,17.88z M9,12.5c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1S8.45,12.5,9,12.5z M5,12.5c0.55,0,1,0.45,1,1 s-0.45,1-1,1s-1-0.45-1-1S4.45,12.5,5,12.5z');
        $l2I6->setStyle('opacity', '.3');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGCircle(cx: '5', cy: '13.5', r: '1');
        $l1I0->addChild($l2I7);
        $l2I8 = new SVGCircle(cx: '9', cy: '13.5', r: '1');
        $l1I0->addChild($l2I8);
        $l2I9 = new SVGPath(d: 'M7,17.88c1.38,0,2.5-0.84,2.5-1.88h-5C4.5,17.04,5.62,17.88,7,17.88z');
        $l1I0->addChild($l2I9);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
