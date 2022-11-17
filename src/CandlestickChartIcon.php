<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['analytics', 'candlestick', 'chart', 'data', 'diagram', 'finance', 'graph', 'infographic', 'measure', 'metrics', 'statistics', 'tracking'],
)]
final class CandlestickChartIcon extends SVG
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[9, 4], [7, 4], [7, 6], [5, 6], [5, 18], [7, 18], [7, 20], [9, 20], [9, 18], [11, 18], [11, 6], [9, 6]]);
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[19, 8], [17, 8], [17, 4], [15, 4], [15, 8], [13, 8], [13, 15], [15, 15], [15, 20], [17, 20], [17, 15], [19, 15]]);
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
