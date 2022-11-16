<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class Rotate90DegreesCwSharpIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M4.64,19.37c3.03,3.03,7.67,3.44,11.15,1.25l-1.46-1.46c-2.66,1.43-6.04,1.03-8.28-1.21c-2.73-2.73-2.73-7.17,0-9.9 C7.42,6.69,9.21,6.03,11,6.03V9l4-4l-4-4v3.01c-2.3,0-4.61,0.87-6.36,2.63C1.12,10.15,1.12,15.85,4.64,19.37z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M17,7l-6,6l6,6l6-6L17,7z');
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
