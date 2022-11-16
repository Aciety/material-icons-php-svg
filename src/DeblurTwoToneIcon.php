<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class DeblurTwoToneIcon extends SVG
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
        $l2I0 = new SVGCircle(cx: '6', cy: '14', r: '1');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '6', cy: '18', r: '1');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '6', cy: '10', r: '1');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '3', cy: '10', r: '.5');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGCircle(cx: '6', cy: '6', r: '1');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGCircle(cx: '3', cy: '14', r: '.5');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGCircle(cx: '10', cy: '21', r: '.5');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGCircle(cx: '10', cy: '3', r: '.5');
        $l1I0->addChild($l2I7);
        $l2I8 = new SVGCircle(cx: '10', cy: '6', r: '1');
        $l1I0->addChild($l2I8);
        $l2I9 = new SVGCircle(cx: '10', cy: '14', r: '1.5');
        $l1I0->addChild($l2I9);
        $l2I10 = new SVGCircle(cx: '10', cy: '10', r: '1.5');
        $l1I0->addChild($l2I10);
        $l2I11 = new SVGCircle(cx: '10', cy: '18', r: '1');
        $l1I0->addChild($l2I11);
        $l2I12 = new SVGPath(d: 'M12,3v2c3.86,0,7,3.14,7,7s-3.14,7-7,7v2c4.96,0,9-4.04,9-9S16.96,3,12,3z');
        $l1I0->addChild($l2I12);
        $l2I13 = new SVGPath(d: 'M12,5v14c3.86,0,7-3.14,7-7S15.86,5,12,5z');
        $l2I13->setStyle('opacity', '.3');
        $l1I0->addChild($l2I13);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}