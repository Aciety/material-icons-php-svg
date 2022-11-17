<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['Android', 'OS', 'ad', 'banner', 'cell', 'device', 'hardware', 'iOS', 'mobile', 'notification', 'notifications', 'phone', 'tablet', 'top', 'units'],
)]
final class AdUnitsTwoToneIcon extends SVG
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
        $l1I1 = new SVGRect(x: '7', y: '3', width: '10', height: '1');
        $l1I1->setStyle('opacity', '.3');
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGRect(x: '7', y: '20', width: '10', height: '1');
        $l1I2->setStyle('opacity', '.3');
        $l0I0->addChild($l1I2);
        $l1I3 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M17,1H7C5.9,1,5,1.9,5,3v18c0,1.1,0.9,2,2,2h10c1.1,0,2-0.9,2-2V3C19,1.9,18.1,1,17,1L17,1z M7,4V3h10v1H7L7,4z M7,18V6 h10v12H7L7,18z M7,21v-1h10v1H7L7,21z');
        $l2I0->addChild($l3I0);
        $l1I3->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[16, 7], [8, 7], [8, 9], [16, 9], [16, 7]]);
        $l2I1->addChild($l3I0);
        $l1I3->addChild($l2I1);
        $l0I0->addChild($l1I3);
        $doc->addChild($l0I0);
    }
}
