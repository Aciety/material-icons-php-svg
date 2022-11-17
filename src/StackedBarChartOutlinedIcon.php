<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['content'],
    tags: ['analytics', 'bar', 'chart-chart', 'data', 'diagram', 'graph', 'infographic', 'measure', 'metrics', 'stacked', 'statistics', 'tracking'],
)]
final class StackedBarChartOutlinedIcon extends SVG
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
        $l2I0 = new SVGRect(x: '4', y: '9', width: '4', height: '11');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '4', y: '4', width: '4', height: '4');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '10', y: '7', width: '4', height: '4');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '16', y: '10', width: '4', height: '4');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '16', y: '15', width: '4', height: '5');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGRect(x: '10', y: '12', width: '4', height: '8');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
