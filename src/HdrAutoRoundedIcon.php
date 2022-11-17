<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['A', 'alphabet', 'auto', 'camera', 'character', 'circle', 'dynamic', 'font', 'hdr', 'high', 'letter', 'photo', 'range', 'symbol', 'text', 'type'],
)]
final class HdrAutoRoundedIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[12.04, 8.039999999999999], [11.95, 8.039999999999999], [10.35, 12.59], [13.64, 12.59]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M15,16.41l-0.78-2.22H9.78l-0.79,2.22 C8.87,16.76,8.53,17,8.16,17h0c-0.62,0-1.05-0.62-0.83-1.2l3.34-8.88C10.88,6.37,11.4,6,12,6h0c0.59,0,1.12,0.37,1.33,0.92 l3.34,8.88c0.22,0.58-0.21,1.2-0.83,1.2h0C15.46,17,15.12,16.76,15,16.41z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
