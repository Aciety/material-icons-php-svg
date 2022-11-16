<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class RemoveModeratorOutlinedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M12,4.14l6,2.25v4.7c0,1.19-0.23,2.36-0.64,3.44l1.51,1.51c0.72-1.53,1.13-3.22,1.13-4.95V5l-8-3L6.78,3.96l1.55,1.55 L12,4.14z M2.81,2.81L1.39,4.22L4,6.83v4.26c0,5.05,3.41,9.76,8,10.91c1.72-0.43,3.28-1.36,4.55-2.62l3.23,3.23l1.41-1.41 L2.81,2.81z M12,19.92c-3.45-1.13-6-4.82-6-8.83V8.83l9.14,9.14C14.24,18.85,13.17,19.54,12,19.92z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
