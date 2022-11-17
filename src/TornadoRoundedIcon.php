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
    categories: ['social'],
    tags: ['crisis', 'disaster', 'natural', 'rain', 'storm', 'tornado', 'weather', 'wind'],
)]
final class TornadoRoundedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M20.11,8l1.16-2c0.77-1.33-0.19-3-1.73-3H4.47c-1.54,0-2.5,1.67-1.73,3l1.16,2H20.11z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M7.95,15l2.32,4.01c0.77,1.33,2.69,1.33,3.46,0L16.05,15H7.95z');
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[18.95, 10], [5.05, 10], [6.79, 13], [17.21, 13]]);
        $l2I2->addChild($l3I0);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
