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
    categories: ['home'],
    tags: ['bolt', 'electric', 'energy', 'fast', 'lightning', 'measure', 'meter', 'nest', 'thunderbolt', 'usage', 'voltage', 'volts'],
)]
final class ElectricMeterTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M12,4c-3.86,0-7,3.14-7,7s3.14,7,7,7s7-3.14,7-7S15.86,4,12,4z M14.25,14l-3,3l-1.5-1.5L11,14.25L9.75,13 l3-3l1.5,1.5L13,12.75L14.25,14z M16,9H8V7h8V9z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,2c-4.97,0-9,4.03-9,9c0,3.92,2.51,7.24,6,8.48V22h2v-2.06c0.33,0.04,0.66,0.06,1,0.06s0.67-0.02,1-0.06V22h2v-2.52 c3.49-1.24,6-4.56,6-8.48C21,6.03,16.97,2,12,2z M12,18c-3.86,0-7-3.14-7-7s3.14-7,7-7s7,3.14,7,7S15.86,18,12,18z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '8', y: '7', width: '8', height: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[12.75, 10], [9.75, 13], [11, 14.25], [9.75, 15.5], [11.25, 17], [14.25, 14], [13, 12.75], [14.25, 11.5]]);
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
