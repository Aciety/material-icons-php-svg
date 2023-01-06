<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['accessory', 'audio', 'battery', 'charging', 'earbuds', 'earphone', 'headphone', 'listen', 'music', 'sound'],
)]
final class EarbudsBatterySharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[20, 7], [20, 6], [18, 6], [18, 7], [16, 7], [16, 18], [22, 18], [22, 7]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M5.38,16.5L5.38,16.5c-1.04,0-1.88-0.84-1.88-1.87V10H6V6H4C2.9,6,2,6.9,2,8v6.63C2,16.49,3.51,18,5.37,18h0 c1.86,0,3.37-1.51,3.37-3.37V9.37c0-1.04,0.84-1.87,1.87-1.87h0c1.04,0,1.87,0.84,1.87,1.87V14H10v4h2c1.1,0,2-0.9,2-2V9.37 C14,7.51,12.49,6,10.63,6h0C8.76,6,7.25,7.51,7.25,9.37v5.25C7.25,15.66,6.41,16.5,5.38,16.5z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
