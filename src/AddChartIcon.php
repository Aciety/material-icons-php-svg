<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['editor'],
    tags: ['+', 'add', 'analytics', 'bar', 'bars', 'chart', 'data', 'diagram', 'graph', 'infographic', 'measure', 'metrics', 'new', 'plus', 'statistics', 'symbol', 'tracking'],
)]
final class AddChartIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M6 9.99h2v7H6zm8 3h2v4h-2zm-4-6h2v10h-2zM20 7V4h-2v3h-3v2h3v3h2V9h3V7zm-2 12H4V5h12V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-5h-2v5z');
        $doc->addChild($l0I1);
    }
}
