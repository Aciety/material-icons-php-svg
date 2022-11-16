<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class HeatPumpTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M5,19h14V5H5V19z M12,6c3.31,0,6,2.69,6,6s-2.69,6-6,6s-6-2.69-6-6S8.69,6,12,6z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12,18c3.31,0,6-2.69,6-6s-2.69-6-6-6s-6,2.69-6,6S8.69,18,12,18z M11.25,15.92c-0.55-0.1-1.05-0.32-1.5-0.62l1.5-1.5 V15.92z M12.75,15.92v-2.11l1.5,1.5C13.8,15.61,13.3,15.82,12.75,15.92z M15.31,14.25l-1.5-1.5h2.11 C15.82,13.3,15.61,13.8,15.31,14.25z M15.92,11.25h-2.11l1.5-1.5C15.61,10.2,15.82,10.7,15.92,11.25z M12.75,8.08 c0.55,0.1,1.05,0.32,1.5,0.62l-1.5,1.5V8.08z M12,11c0.55,0,1,0.45,1,1c0,0.55-0.45,1-1,1s-1-0.45-1-1C11,11.45,11.45,11,12,11z M11.25,8.08v2.11l-1.5-1.5C10.2,8.39,10.7,8.18,11.25,8.08z M8.69,9.75l1.5,1.5H8.08C8.18,10.7,8.39,10.2,8.69,9.75z M10.19,12.75l-1.5,1.5c-0.3-0.44-0.51-0.95-0.62-1.5H10.19z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
