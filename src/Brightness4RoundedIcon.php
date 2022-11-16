<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class Brightness4RoundedIcon extends SVG
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
        $l3I0 = new SVGPath(d: 'M22.6,11.29L20,8.69V5c0-0.55-0.45-1-1-1h-3.69l-2.6-2.6c-0.39-0.39-1.02-0.39-1.41,0L8.69,4H5C4.45,4,4,4.45,4,5v3.69 l-2.6,2.6c-0.39,0.39-0.39,1.02,0,1.41L4,15.3V19c0,0.55,0.45,1,1,1h3.69l2.6,2.6c0.39,0.39,1.02,0.39,1.41,0l2.6-2.6H19 c0.55,0,1-0.45,1-1v-3.69l2.6-2.6C22.99,12.32,22.99,11.68,22.6,11.29z M17.92,12.98c-0.34,2.12-1.85,3.94-3.88,4.66 c-1.21,0.43-2.41,0.45-3.5,0.18c-0.41-0.1-0.48-0.65-0.13-0.9C11.98,15.84,13,14.04,13,12s-1.02-3.84-2.58-4.92 c-0.35-0.24-0.29-0.79,0.13-0.9c1.09-0.27,2.29-0.25,3.5,0.18c2.02,0.72,3.54,2.54,3.88,4.66C17.98,11.35,18,11.68,18,12 C17.99,12.32,17.97,12.65,17.92,12.98z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}