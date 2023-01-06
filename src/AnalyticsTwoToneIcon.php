<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['analytics', 'assessment', 'bar', 'chart', 'data', 'diagram', 'graph', 'infographic', 'measure', 'metrics', 'statistics', 'tracking'],
)]
final class AnalyticsTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '5', y: '5', width: '14', height: '14');
        $l1I0->setStyle('opacity', '.3');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l2I0->setStyle('fill', 'none');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z');
        $l2I1->addChild($l3I0);
        $l3I1 = new SVGRect(x: '7', y: '12', width: '2', height: '5');
        $l2I1->addChild($l3I1);
        $l3I2 = new SVGRect(x: '15', y: '7', width: '2', height: '10');
        $l2I1->addChild($l3I2);
        $l3I3 = new SVGRect(x: '11', y: '14', width: '2', height: '3');
        $l2I1->addChild($l3I3);
        $l3I4 = new SVGRect(x: '11', y: '10', width: '2', height: '2');
        $l2I1->addChild($l3I4);
        $l1I1->addChild($l2I1);
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
