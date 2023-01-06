<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['+', 'addchart', 'analytics', 'bar', 'bars', 'chart', 'data', 'diagram', 'graph', 'infographic', 'measure', 'metrics', 'new', 'plus', 'statistics', 'symbol', 'tracking'],
)]
final class AddchartSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M11,9h2v8h-2V9z M9,17v-6H7v6H9z M19,19H5V5h6V3H3v18h18v-8h-2V19z M15,13v4h2v-4H15z M19,5V2h-2v3h-3v2h3v3h2V7h3V5H19z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $doc->addChild($l0I1);
    }
}
