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
    categories: ['maps'],
    tags: ['automobile', 'bike', 'car', 'cars', 'electric', 'maps', 'moped', 'scooter', 'transportation', 'travel', 'vehicle', 'vespa'],
)]
final class ElectricMopedOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M19,5c0-1.1-0.9-2-2-2h-3v2h3v2.65L13.52,12H10V7H6c-2.21,0-4,1.79-4,4v3h2c0,1.66,1.34,3,3,3s3-1.34,3-3h4.48L19,8.35V5z M4,12v-1c0-1.1,0.9-2,2-2h2v3H4z M7,15c-0.55,0-1-0.45-1-1h2C8,14.55,7.55,15,7,15z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '5', y: '4', width: '5', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M19,11c-1.66,0-3,1.34-3,3s1.34,3,3,3s3-1.34,3-3S20.66,11,19,11z M19,15c-0.55,0-1-0.45-1-1s0.45-1,1-1s1,0.45,1,1 S19.55,15,19,15z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPolygon(points: [[7, 20], [11, 20], [11, 18], [17, 21], [13, 21], [13, 23]]);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
