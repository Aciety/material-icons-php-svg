<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['analytics', 'chart', 'data', 'diagram', 'graph', 'infographic', 'line', 'measure', 'metrics', 'stacked', 'statistics', 'tracking'],
)]
final class StackedLineChartRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M2.79,14.78L2.7,14.69c-0.39-0.39-0.39-1.02,0-1.41l6.09-6.1c0.39-0.39,1.02-0.39,1.41,0l3.29,3.29l6.39-7.18 c0.38-0.43,1.05-0.44,1.45-0.04l0,0c0.37,0.38,0.39,0.98,0.04,1.37l-7.17,8.07c-0.38,0.43-1.04,0.45-1.45,0.04L9.5,9.48l-5.3,5.3 C3.82,15.17,3.18,15.17,2.79,14.78z M4.2,20.78l5.3-5.3l3.25,3.25c0.41,0.41,1.07,0.39,1.45-0.04l7.17-8.07 c0.35-0.39,0.33-0.99-0.04-1.37l0,0c-0.4-0.4-1.07-0.39-1.45,0.04l-6.39,7.18l-3.29-3.29c-0.39-0.39-1.02-0.39-1.41,0l-6.09,6.1 c-0.39,0.39-0.39,1.02,0,1.41l0.09,0.09C3.18,21.17,3.82,21.17,4.2,20.78z');
        $doc->addChild($l0I1);
    }
}
