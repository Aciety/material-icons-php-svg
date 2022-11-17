<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['+', 'addchart', 'analytics', 'bar', 'bars', 'chart', 'data', 'diagram', 'graph', 'infographic', 'measure', 'metrics', 'new', 'plus', 'statistics', 'symbol', 'tracking'],
)]
final class AddchartOutlinedIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M22,5v2h-3v3h-2V7h-3V5h3V2h2v3H22z M19,19H5V5h6V3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2v-6h-2V19z M15,13v4h2v-4H15z M11,17h2V9h-2V17z M9,17v-6H7v6H9z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
