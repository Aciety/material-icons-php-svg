<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ThreeKPlusTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M5,19h14v-6.5h-1.5V14h-1v-1.5H15v-1h1.5V10h1v1.5H19V5H5V19z M11,9h1.5v2.25L14.25,9H16l-2.25,3L16,15 h-1.75l-1.75-2.25V15H11V9z M5.5,13.5h3v-1h-2v-1h2v-1h-3V9H9c0.55,0,1,0.45,1,1v4c0,0.55-0.45,1-1,1H5.5V13.5z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,11.5h-1.5V10h-1v1.5H15v1h1.5 V14h1v-1.5H19V19H5V5h14V11.5z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M10,14v-4c0-0.55-0.45-1-1-1H5.5v1.5h3v1h-2v1h2v1h-3V15H9C9.55,15,10,14.55,10,14z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[12.5, 12.75], [14.25, 15], [16, 15], [13.75, 12], [16, 9], [14.25, 9], [12.5, 11.25], [12.5, 9], [11, 9], [11, 15], [12.5, 15]]);
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
