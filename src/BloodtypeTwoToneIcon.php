<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class BloodtypeTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M12,4.67c-4.05,3.7-6,6.79-6,9.14c0,3.63,2.65,6.2,6,6.2s6-2.57,6-6.2C18,11.46,16.05,8.36,12,4.67z M15,18 H9v-2h6V18z M15,13h-2v2h-2v-2H9v-2h2V9h2v2h2V13z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '9', y: '16', width: '6', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[13, 9], [11, 9], [11, 11], [9, 11], [9, 13], [11, 13], [11, 15], [13, 15], [13, 13], [15, 13], [15, 11], [13, 11]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M12,2c-5.33,4.55-8,8.48-8,11.8c0,4.98,3.8,8.2,8,8.2s8-3.22,8-8.2C20,10.48,17.33,6.55,12,2z M12,20 c-3.35,0-6-2.57-6-6.2c0-2.34,1.95-5.44,6-9.14c4.05,3.7,6,6.79,6,9.14C18,17.43,15.35,20,12,20z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
