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
    tags: ['automobile', 'car', 'cars', 'electric', 'electricity', 'maps', 'transportation', 'travel', 'vehicle'],
)]
final class ElectricCarIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M18.92,2.01C18.72,1.42,18.16,1,17.5,1h-11C5.84,1,5.29,1.42,5.08,2.01L3,8v8c0,0.55,0.45,1,1,1h1c0.55,0,1-0.45,1-1v-1h12 v1c0,0.55,0.45,1,1,1h1c0.55,0,1-0.45,1-1V8L18.92,2.01z M6.5,12C5.67,12,5,11.33,5,10.5S5.67,9,6.5,9S8,9.67,8,10.5 S7.33,12,6.5,12z M17.5,12c-0.83,0-1.5-0.67-1.5-1.5S16.67,9,17.5,9S19,9.67,19,10.5S18.33,12,17.5,12z M5,7l1.5-4.5h11L19,7H5z');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPolygon(points: [[7, 20], [11, 20], [11, 18], [17, 21], [13, 21], [13, 23]]);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
