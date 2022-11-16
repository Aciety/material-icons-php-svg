<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class RocketTwoToneIcon extends SVG
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
        $l3I0 = new SVGPath(d: 'M7.98,18.25c-0.29-0.9-0.57-1.94-0.76-3L6,16.07v2.98L7.98,18.25z M12,4.36c0,0-3,2.02-3,8.64c0,2.25,1,5,1,5h4 c0,0,1-2.75,1-5C15,6.38,12,4.36,12,4.36z M12,13c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2s2,0.9,2,2C14,12.1,13.1,13,12,13z M18,19.05 v-2.98l-1.22-0.81c-0.19,1.05-0.47,2.1-0.76,3L18,19.05z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l1I0->setStyle('opacity', '.3');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M14,11c0-1.1-0.9-2-2-2s-2,0.9-2,2s0.9,2,2,2S14,12.1,14,11z M7.98,18.25c-0.29-0.9-0.57-1.94-0.76-3L6,16.07v2.98 L7.98,18.25z M12,2c0,0,5,2,5,11l2.11,1.41c0.56,0.37,0.89,1,0.89,1.66V22l-5-2H9l-5,2v-5.93c0-0.67,0.33-1.29,0.89-1.66L7,13 C7,4,12,2,12,2z M12,4.36c0,0-3,2.02-3,8.64c0,2.25,1,5,1,5h4c0,0,1-2.75,1-5C15,6.38,12,4.36,12,4.36z M18,19.05v-2.98 l-1.22-0.81c-0.19,1.05-0.47,2.1-0.76,3L18,19.05z');
        $l2I0->addChild($l3I0);
        $l1I1->addChild($l2I0);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
