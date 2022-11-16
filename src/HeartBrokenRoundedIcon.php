<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class HeartBrokenRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M19.57,3.95c-1.92-1.29-4.08-1.17-5.8-0.26L12,9h1.66c0.67,0,1.15,0.65,0.96,1.29l-1.82,6.07c-0.09,0.29-0.52,0.2-0.49-0.1 L13,10h-1.67c-0.66,0-1.14-0.64-0.96-1.27l1.18-4.11c0,0,0,0,0,0C9.7,2.89,6.71,2.32,4.27,4.04C2.82,5.07,2,6.7,2,8.49 c-0.01,3.81,3.53,6.71,8.66,11.3c0.76,0.68,1.92,0.69,2.69,0.01c4.98-4.42,8.87-7.58,8.64-11.62C21.9,6.45,21,4.92,19.57,3.95z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
