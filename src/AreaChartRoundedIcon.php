<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['analytics', 'area', 'chart', 'data', 'diagram', 'graph', 'infographic', 'measure', 'metrics', 'statistics', 'tracking'],
)]
final class AreaChartRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M8,17l3.39-4.66c0.33-0.46,0.98-0.55,1.42-0.2L21,18.5V19c0,0.55-0.45,1-1,1H4c-0.55,0-1-0.45-1-1l0-5.72 c0.22,0,0.44,0.07,0.62,0.22L8,17z M3,11c0.44,0,0.88,0.15,1.25,0.44l3.37,2.69l2.77-3.81c0.66-0.91,1.95-1.1,2.85-0.4L21,15.97V8 c0-0.55-0.45-1-1-1h-3l-4.18-3.34c-0.45-0.36-1.1-0.27-1.44,0.2L7,10L3.6,7.45C3.42,7.32,3.21,7.25,3,7.25L3,11z');
        $doc->addChild($l0I1);
    }
}
