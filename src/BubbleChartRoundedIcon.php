<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['analytics', 'bar', 'bars', 'bubble', 'chart', 'data', 'diagram', 'graph', 'infographic', 'measure', 'metrics', 'statistics', 'tracking'],
)]
final class BubbleChartRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGCircle(cx: '7.2', cy: '14.4', r: '3.2');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '14.8', cy: '18', r: '2');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '15.2', cy: '8.8', r: '4.8');
        $doc->addChild($l0I3);
    }
}
