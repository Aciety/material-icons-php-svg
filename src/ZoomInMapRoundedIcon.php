<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ZoomInMapRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M3,8c0,0.55,0.45,1,1,1l4,0c0.55,0,1-0.45,1-1l0-4c0-0.55-0.45-1-1-1S7,3.45,7,4l0,1.59L4.62,3.21 c-0.39-0.39-1.02-0.39-1.41,0c-0.39,0.39-0.39,1.02,0,1.41L5.59,7L4,7C3.45,7,3,7.45,3,8z M20,7h-1.59l2.38-2.38 c0.39-0.39,0.39-1.02,0-1.41c-0.39-0.39-1.02-0.39-1.41,0L17,5.59V4c0-0.55-0.45-1-1-1c-0.55,0-1,0.45-1,1v4c0,0.55,0.45,1,1,1h4 c0.55,0,1-0.45,1-1S20.55,7,20,7z M4,17h1.59l-2.38,2.38c-0.39,0.39-0.39,1.02,0,1.41c0.39,0.39,1.02,0.39,1.41,0L7,18.41L7,20 c0,0.55,0.45,1,1,1s1-0.45,1-1l0-4c0-0.55-0.45-1-1-1l-4,0c-0.55,0-1,0.45-1,1C3,16.55,3.45,17,4,17z M21,16c0-0.55-0.45-1-1-1h-4 c-0.55,0-1,0.45-1,1v4c0,0.55,0.45,1,1,1c0.55,0,1-0.45,1-1v-1.59l2.38,2.38c0.39,0.39,1.02,0.39,1.41,0 c0.39-0.39,0.39-1.02,0-1.41L18.41,17H20C20.55,17,21,16.55,21,16z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
