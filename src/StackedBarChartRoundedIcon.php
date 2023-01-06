<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['content'],
    tags: ['analytics', 'bar', 'chart-chart', 'data', 'diagram', 'graph', 'infographic', 'measure', 'metrics', 'stacked', 'statistics', 'tracking'],
)]
final class StackedBarChartRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M6,20L6,20c1.1,0,2-0.9,2-2V9H4v9C4,19.1,4.9,20,6,20z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M4,8h4V6c0-1.1-0.9-2-2-2h0C4.9,4,4,4.9,4,6V8z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M10,11h4V9c0-1.1-0.9-2-2-2h0c-1.1,0-2,0.9-2,2V11z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M16,12v2h4v-2c0-1.1-0.9-2-2-2h0C16.9,10,16,10.9,16,12z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M18,20L18,20c1.1,0,2-0.9,2-2v-3h-4v3C16,19.1,16.9,20,18,20z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M12,20L12,20c1.1,0,2-0.9,2-2v-6h-4v6C10,19.1,10.9,20,12,20z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
