<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class Rotate90DegreesCwRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M3.86,18.46c2.65,3.45,7.11,4.37,10.74,2.79c0.61-0.27,0.74-1.09,0.27-1.56l-0.05-0.05c-0.29-0.29-0.72-0.35-1.1-0.19 c-2.96,1.24-6.59,0.37-8.58-2.62c-1.58-2.37-1.55-5.37,0.05-7.73C6.6,7.03,8.8,6.03,11,6.03v1.76c0,0.45,0.54,0.67,0.86,0.36 l2.79-2.79c0.2-0.2,0.2-0.51,0-0.71l-2.8-2.79C11.54,1.54,11,1.76,11,2.21v1.8c-2.76,0-5.52,1.25-7.34,3.78 C1.38,10.96,1.46,15.37,3.86,18.46z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M17.7,7.71c-0.39-0.39-1.02-0.39-1.41,0l-4.59,4.58c-0.39,0.39-0.39,1.02,0,1.41l4.59,4.59c0.39,0.39,1.02,0.39,1.41,0 l4.59-4.59c0.39-0.39,0.39-1.02,0-1.41L17.7,7.71z');
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
