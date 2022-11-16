<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ElevatorSharpIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M21,3H3v18h18V3z M8.5,6c0.69,0,1.25,0.56,1.25,1.25c0,0.69-0.56,1.25-1.25,1.25S7.25,7.94,7.25,7.25 C7.25,6.56,7.81,6,8.5,6z M11,14h-1v4H7v-4H6V9.5h5V14z M15.5,17L13,13h5L15.5,17z M13,11l2.5-4l2.5,4H13z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
