<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['analytics', 'arrow', 'arrows', 'bar', 'bars', 'chart', 'data', 'diagram', 'direction', 'drive', 'edit', 'editing', 'graph', 'grid', 'infographic', 'measure', 'metrics', 'pivot', 'rotate', 'sheet', 'statistics', 'table', 'tracking'],
)]
final class PivotTableChartSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGRect(x: '10', y: '3', width: '11', height: '5');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '3', y: '10', width: '5', height: '11');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '3', y: '3', width: '5', height: '5');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[18, 9], [14, 13], [17, 13], [17, 17], [13, 17], [13, 14], [9, 18], [13, 22], [13, 19], [19, 19], [19, 13], [22, 13]]);
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
