<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class HdrPlusTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M12,4c-4.41,0-8,3.59-8,8c0,2.52,1.17,4.77,3,6.24V13h3.5c0.8,0,1.5,0.7,1.5,1.5v1c0,0.6-0.4,1.1-0.9,1.4 L12,19h-1.5l-0.9-2H8.5v2H8.13c1.15,0.64,2.47,1,3.87,1c4.41,0,8-3.59,8-8C20,7.59,16.41,4,12,4z M12,12h-1.5V9.5h-2V12H7V6h1.5v2 h2V6H12V12z M17.5,16H16v1.5h-1.5V16H13v-1.5h1.5V13H16v1.49h1.5V16z M17.5,10.5c0,0.8-0.7,1.5-1.5,1.5h-3V6h3 c0.8,0,1.5,0.7,1.5,1.5V10.5z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '14.5', y: '7.5', width: '1.5', height: '3');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '8.5', y: '14.5', width: '2', height: '1');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-1.4,0-2.72-0.36-3.87-1H8.5v-2h1.1l0.9,2H12 l-0.9-2.1c0.5-0.3,0.9-0.8,0.9-1.4v-1c0-0.8-0.7-1.5-1.5-1.5H7v5.24C5.17,16.77,4,14.52,4,12c0-4.41,3.59-8,8-8s8,3.59,8,8 C20,16.41,16.41,20,12,20z M8.5,15.5v-1h2v1H8.5z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPolygon(points: [[10.5, 8], [8.5, 8], [8.5, 6], [7, 6], [7, 12], [8.5, 12], [8.5, 9.5], [10.5, 9.5], [10.5, 12], [12, 12], [12, 6], [10.5, 6]]);
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M16,6h-3v6h3c0.8,0,1.5-0.7,1.5-1.5v-3C17.5,6.7,16.8,6,16,6z M16,10.5h-1.5v-3H16V10.5z');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPolygon(points: [[16, 13], [14.5, 13], [14.5, 14.5], [13, 14.5], [13, 16], [14.5, 16], [14.5, 17.5], [16, 17.5], [16, 16], [17.5, 16], [17.5, 14.49], [16, 14.49]]);
        $l1I0->addChild($l2I6);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
