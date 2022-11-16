<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class HourglassDisabledRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M2.81,2.81c-0.39-0.39-1.02-0.39-1.41,0C1,3.2,1,3.83,1.39,4.22l8.19,8.19l-3,3.01C6.21,15.8,6,16.31,6,16.84V20 c0,1.1,0.9,2,2,2h8c0.86,0,1.58-0.54,1.87-1.3l1.91,1.91c0.39,0.39,1.02,0.39,1.41,0c0.39-0.39,0.39-1.02,0-1.41L2.81,2.81z M16,19c0,0.55-0.45,1-1,1H9c-0.55,0-1-0.45-1-1v-2.5l2.84-2.84L16,18.83V19z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M8,5c0-0.55,0.45-1,1-1h6c0.55,0,1,0.45,1,1v2.5l-2.84,2.84l1.25,1.25l3-2.99C17.79,8.22,18,7.71,18,7.18V4 c0-1.11-0.9-2-2-2H8C7.14,2,6.42,2.54,6.13,3.3L8,5.17V5z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
