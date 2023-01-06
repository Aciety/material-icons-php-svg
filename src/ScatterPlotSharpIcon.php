<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['analytics', 'bar', 'bars', 'chart', 'circles', 'data', 'diagram', 'dot', 'graph', 'infographic', 'measure', 'metrics', 'plot', 'scatter', 'statistics', 'tracking'],
)]
final class ScatterPlotSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGCircle(cx: '7', cy: '14', r: '3');
        $doc->addChild($l0I0);
        $l0I1 = new SVGCircle(cx: '11', cy: '6', r: '3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '16.6', cy: '17.6', r: '3');
        $doc->addChild($l0I2);
    }
}
