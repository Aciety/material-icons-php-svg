<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ShuffleOnRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M21,1H3C1.9,1,1,1.9,1,3v18c0,1.1,0.9,2,2,2h18c1.1,0,2-0.9,2-2V3C23,1.9,22.1,1,21,1z M4.3,4.7 c0.39-0.39,1.02-0.39,1.41,0l4.47,4.47l-1.42,1.4L4.3,6.11C3.91,5.72,3.91,5.09,4.3,4.7z M19.59,19.5c0,0.28-0.22,0.5-0.5,0.5H15.3 c-0.45,0-0.67-0.54-0.36-0.85l1.2-1.2l-3.13-3.13l1.41-1.41l3.13,3.14l1.19-1.19c0.31-0.32,0.85-0.1,0.85,0.35V19.5z M19.59,8.29 c0,0.45-0.54,0.67-0.85,0.36l-1.19-1.19L5.7,19.29c-0.39,0.39-1.02,0.39-1.41,0c-0.39-0.39-0.39-1.02,0-1.41L16.13,6.04l-1.19-1.19 C14.63,4.54,14.85,4,15.3,4h3.79c0.28,0,0.5,0.22,0.5,0.5V8.29z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
