<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class RepartitionRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M4.5,21h15c0.83,0,1.5-0.67,1.5-1.5v-3c0-0.83-0.67-1.5-1.5-1.5h-15C3.67,15,3,15.67,3,16.5v3C3,20.33,3.67,21,4.5,21z M10.33,19v-2h3.33v2H10.33z M19,19h-3.33v-2H19V19z M5,17h3.33v2H5V17z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M6.71,9.29L6.71,9.29c0.39-0.39,0.39-1.02,0-1.42L5.83,7l11.06,0c1,0,1.92,0.68,2.08,1.66C19.18,9.91,18.21,11,17,11H4 c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1l12.82,0c2.09,0,3.96-1.52,4.16-3.6C21.21,7.02,19.34,5,17,5H5.83l0.88-0.88 c0.39-0.39,0.39-1.02,0-1.42l0,0c-0.39-0.39-1.02-0.39-1.41,0L2.71,5.29c-0.39,0.39-0.39,1.02,0,1.41l2.59,2.59 C5.68,9.68,6.32,9.68,6.71,9.29z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
