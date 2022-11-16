<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class IntegrationInstructionsSharpIcon extends SVG
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
        $l1I1 = new SVGCircle(cx: '12', cy: '3.5', r: '.75');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGCircle(cx: '12', cy: '3.5', r: '.75');
        $l1I2->setStyle('fill', 'none');
        $l0I0->addChild($l1I2);
        $l1I3 = new SVGCircle(cx: '12', cy: '3.5', r: '.75');
        $l1I3->setStyle('fill', 'none');
        $l0I0->addChild($l1I3);
        $l1I4 = new SVGPath(d: 'M21,3h-6.18C14.4,1.84,13.3,1,12,1S9.6,1.84,9.18,3H3v18h18V3z M11,14.17l-1.41,1.42L6,12l3.59-3.59L11,9.83L8.83,12 L11,14.17z M12,4.25c-0.41,0-0.75-0.34-0.75-0.75S11.59,2.75,12,2.75s0.75,0.34,0.75,0.75S12.41,4.25,12,4.25z M14.41,15.59 L13,14.17L15.17,12L13,9.83l1.41-1.42L18,12L14.41,15.59z');
        $l0I0->addChild($l1I4);
        $doc->addChild($l0I0);
    }
}
