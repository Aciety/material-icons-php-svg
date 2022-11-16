<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ClosedCaptionOffTwoToneIcon extends SVG
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
        $l3I0 = new SVGPath(d: 'M19,6H5v12h14V6z M11,11H9.5v-0.5h-2v3h2V13H11v1c0,0.55-0.45,1-1,1H7 c-0.55,0-1-0.45-1-1v-4c0-0.55,0.45-1,1-1h3c0.55,0,1,0.45,1,1V11z M18,11h-1.5v-0.5h-2v3h2V13H18v1c0,0.55-0.45,1-1,1h-3 c-0.55,0-1-0.45-1-1v-4c0-0.55,0.45-1,1-1h3c0.55,0,1,0.45,1,1V11z');
        $l3I0->setStyle('enable-background', 'new');
        $l3I0->setStyle('opacity', '.3');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGPath(d: 'M5,20h14c1.1,0,2-0.9,2-2V6c0-1.1-0.9-2-2-2H5C3.89,4,3,4.9,3,6v12C3,19.1,3.89,20,5,20z M5,6h14v12H5V6z');
        $l2I0->addChild($l3I1);
        $l3I2 = new SVGPath(d: 'M10,9H7c-0.55,0-1,0.45-1,1v4c0,0.55,0.45,1,1,1h3c0.55,0,1-0.45,1-1v-1H9.5v0.5h-2v-3h2V11H11v-1C11,9.45,10.55,9,10,9z');
        $l2I0->addChild($l3I2);
        $l3I3 = new SVGPath(d: 'M17,9h-3c-0.55,0-1,0.45-1,1v4c0,0.55,0.45,1,1,1h3c0.55,0,1-0.45,1-1v-1h-1.5v0.5h-2v-3h2V11H18v-1 C18,9.45,17.55,9,17,9z');
        $l2I0->addChild($l3I3);
        $l1I0->addChild($l2I0);
        $l1I0->setStyle('enable-background', 'new');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
