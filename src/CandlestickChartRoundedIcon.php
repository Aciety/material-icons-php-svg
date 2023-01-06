<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['analytics', 'candlestick', 'chart', 'data', 'diagram', 'finance', 'graph', 'infographic', 'measure', 'metrics', 'statistics', 'tracking'],
)]
final class CandlestickChartRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
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
        $l3I0 = new SVGPath(d: 'M8,4L8,4C7.45,4,7,4.45,7,5v1H6C5.45,6,5,6.45,5,7v10c0,0.55,0.45,1,1,1h1v1c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-1h1 c0.55,0,1-0.45,1-1V7c0-0.55-0.45-1-1-1H9V5C9,4.45,8.55,4,8,4z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M18,8h-1V5c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1v3h-1c-0.55,0-1,0.45-1,1v5c0,0.55,0.45,1,1,1h1v4c0,0.55,0.45,1,1,1 h0c0.55,0,1-0.45,1-1v-4h1c0.55,0,1-0.45,1-1V9C19,8.45,18.55,8,18,8z');
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
