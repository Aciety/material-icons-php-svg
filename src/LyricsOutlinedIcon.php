<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class LyricsOutlinedIcon extends SVG
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
        $l2I0 = new SVGRect(x: '6', y: '6', width: '7', height: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '6', y: '12', width: '4', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M15,11.97V16H6l-2,2V4h11v2.03c0.52-0.69,1.2-1.25,2-1.6V4c0-1.1-0.9-2-2-2H4C2.9,2,2.01,2.9,2.01,4L2,22l4-4h9 c1.1,0,2-0.9,2-2v-2.42C16.2,13.22,15.52,12.66,15,11.97z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '6', y: '9', width: '7', height: '2');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M20,6.18C19.69,6.07,19.35,6,19,6c-1.66,0-3,1.34-3,3c0,1.66,1.34,3,3,3s3-1.34,3-3V3h2V1h-4V6.18z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
