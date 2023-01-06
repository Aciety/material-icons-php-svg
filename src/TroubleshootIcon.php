<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['analytics', 'chart', 'data', 'diagram', 'find', 'glass', 'graph', 'infographic', 'line', 'look', 'magnify', 'magnifying', 'measure', 'metrics', 'search', 'see', 'statistics', 'tracking', 'troubleshoot'],
)]
final class TroubleshootIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M22,20.59l-4.69-4.69C18.37,14.55,19,12.85,19,11c0-4.42-3.58-8-8-8c-4.08,0-7.44,3.05-7.93,7h2.02C5.57,7.17,8.03,5,11,5 c3.31,0,6,2.69,6,6s-2.69,6-6,6c-2.42,0-4.5-1.44-5.45-3.5H3.4C4.45,16.69,7.46,19,11,19c1.85,0,3.55-0.63,4.9-1.69L20.59,22 L22,20.59z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[8.43, 9.69], [9.65, 15], [11.29, 15], [12.55, 11.22], [13.5, 13.5], [15.5, 13.5], [15.5, 12], [14.5, 12], [13.25, 9], [11.71, 9], [10.59, 12.37], [9.35, 7], [7.7, 7], [6.45, 11], [1, 11], [1, 12.5], [7.55, 12.5]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
