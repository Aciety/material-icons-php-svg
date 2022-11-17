<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['analytics', 'candlestick', 'chart', 'data', 'diagram', 'finance', 'graph', 'infographic', 'measure', 'metrics', 'statistics', 'tracking'],
)]
final class CandlestickChartOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M9,4H7v2H5v12h2v2h2v-2h2V6H9V4z M9,16H7V8h2V16z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19,8h-2V4h-2v4h-2v7h2v5h2v-5h2V8z M17,13h-2v-3h2V13z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
