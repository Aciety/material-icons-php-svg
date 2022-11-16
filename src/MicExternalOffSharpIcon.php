<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class MicExternalOffSharpIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M10,5c0-1.66-1.34-3-3-3C6.38,2,5.81,2.19,5.33,2.5l4.15,4.15C9.8,6.18,10,5.61,10,5z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[14, 4], [18, 4], [18, 15.17], [20, 17.17], [20, 2], [12, 2], [12, 9.17], [14, 11.17]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M2.1,2.1L0.69,3.51L5.17,8H4l1,10h1c0,2.21,0,4,0,4h8v-5.17l6.49,6.49l1.41-1.41L2.1,2.1z M12,20H8v-2h1l0.56-5.61 L12,14.83V20z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
