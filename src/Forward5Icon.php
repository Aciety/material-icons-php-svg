<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class Forward5Icon extends SVG
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
        $l2I0 = new SVGPath(d: 'M18,13c0,3.31-2.69,6-6,6s-6-2.69-6-6s2.69-6,6-6v4l5-5l-5-5v4c-4.42,0-8,3.58-8,8c0,4.42,3.58,8,8,8c4.42,0,8-3.58,8-8 H18z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12.03,15.38c-0.44,0-0.58-0.31-0.6-0.56h-0.84c0.03,0.85,0.79,1.25,1.44,1.25c0.93,0,1.44-0.63,1.44-1.43 c0-1.33-0.97-1.44-1.3-1.44c-0.2,0-0.43,0.05-0.64,0.16l0.11-0.92h1.7v-0.71h-2.39l-0.25,2.17l0.67,0.17 c0.13-0.13,0.28-0.23,0.57-0.23c0.4,0,0.69,0.23,0.69,0.75C12.62,14.64,12.65,15.38,12.03,15.38z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
