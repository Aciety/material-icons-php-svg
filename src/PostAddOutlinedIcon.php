<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class PostAddOutlinedIcon extends SVG
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
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M17,19.22H5V7h7V5H5C3.9,5,3,5.9,3,7v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-7h-2V19.22z');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19,2h-2v3h-3c0.01,0.01,0,2,0,2h3v2.99c0.01,0.01,2,0,2,0V7h3V5h-3V2z');
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGRect(x: '7', y: '9', width: '8', height: '2');
        $l1I1->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[7, 12], [7, 14], [15, 14], [15, 12], [12, 12]]);
        $l1I1->addChild($l2I3);
        $l2I4 = new SVGRect(x: '7', y: '15', width: '8', height: '2');
        $l1I1->addChild($l2I4);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
