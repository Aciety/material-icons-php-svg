<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class DiscountTwoToneIcon extends SVG
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M19,9.79L11.21,2H5v6.21L12.79,16L19,9.79z M7.25,5.5C6.56,5.5,6,4.94,6,4.25S6.56,3,7.25,3S8.5,3.56,8.5,4.25 S7.94,5.5,7.25,5.5z');
        $l2I0->addChild($l3I0);
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12.79,21L3,11.21v2c0,0.53,0.21,1.04,0.59,1.41l7.79,7.79c0.78,0.78,2.05,0.78,2.83,0l6.21-6.21 c0.78-0.78,0.78-2.05,0-2.83L12.79,21z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M11.38,17.41c0.39,0.39,0.9,0.59,1.41,0.59c0.51,0,1.02-0.2,1.41-0.59l6.21-6.21c0.78-0.78,0.78-2.05,0-2.83l-7.79-7.79 C12.25,0.21,11.74,0,11.21,0H5C3.9,0,3,0.9,3,2v6.21c0,0.53,0.21,1.04,0.59,1.41L11.38,17.41z M5,2h6.21L19,9.79L12.79,16L5,8.21 V2z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '7.25', cy: '4.25', r: '1.25');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
