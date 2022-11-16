<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class HdrPlusOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M8.13,19c1.15,0.64,2.47,1,3.87,1c4.41,0,8-3.59,8-8s-3.59-8-8-8s-8,3.59-8,8c0,2.52,1.17,4.77,3,6.24V13h3.5 c0.8,0,1.5,0.7,1.5,1.5v1c0,0.6-0.4,1.1-0.9,1.4L12,19h-1.5l-0.9-2H8.5v2H8.13z M12,2c5.52,0,10,4.48,10,10s-4.48,10-10,10 S2,17.52,2,12S6.48,2,12,2z M17.5,16H16v1.5h-1.5V16H13v-1.5h1.5V13H16v1.49h1.5V16z M10.5,15.5v-1h-2v1H10.5z M10.5,8V6H12v6 h-1.5V9.5h-2V12H7V6h1.5v2H10.5z M16,6c0.8,0,1.5,0.7,1.5,1.5v3c0,0.8-0.7,1.5-1.5,1.5h-3V6H16z M16,10.5v-3h-1.5v3H16z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
