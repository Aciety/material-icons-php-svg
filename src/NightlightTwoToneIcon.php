<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class NightlightTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGGroup();
        $l4I0 = new SVGPath(d: 'M6,12c0-4.41,3.59-8,8-8c0.34,0,0.68,0.02,1.01,0.07 C13.1,6.23,12,9.05,12,12s1.1,5.77,3.01,7.93C14.68,19.98,14.34,20,14,20C9.59,20,6,16.41,6,12z');
        $l4I0->setStyle('enable-background', 'new');
        $l4I0->setStyle('opacity', '.3');
        $l3I0->addChild($l4I0);
        $l4I1 = new SVGPath(d: 'M14,12c0-3.7,2.01-6.92,5-8.65C17.53,2.5,15.82,2,14,2C8.48,2,4,6.48,4,12s4.48,10,10,10c1.82,0,3.53-0.5,5-1.35 C16.01,18.92,14,15.7,14,12z M15.01,19.93C14.68,19.98,14.34,20,14,20c-4.41,0-8-3.59-8-8s3.59-8,8-8 c0.34,0,0.68,0.02,1.01,0.07C13.1,6.23,12,9.05,12,12S13.1,17.77,15.01,19.93z');
        $l3I0->addChild($l4I1);
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
