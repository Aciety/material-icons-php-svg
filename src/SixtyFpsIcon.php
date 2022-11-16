<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SixtyFpsIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M19,8v8h-4V8H19 M19,5h-4c-1.66,0-3,1.34-3,3v8c0,1.66,1.34,3,3,3h4c1.66,0,3-1.34,3-3V8C22,6.34,20.66,5,19,5z M10,8V5H5 C3.34,5,2,6.34,2,8v8c0,1.66,1.34,3,3,3h3c1.66,0,3-1.34,3-3v-3c0-1.66-1.34-3-3-3H5V8H10z M8,13v3H5v-3H8z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
