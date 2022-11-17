<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['analytics', 'arrow', 'arrows', 'bar', 'bars', 'chart', 'data', 'diagram', 'direction', 'drive', 'edit', 'editing', 'graph', 'grid', 'infographic', 'measure', 'metrics', 'pivot', 'rotate', 'sheet', 'statistics', 'table', 'tracking'],
)]
final class PivotTableChartIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M10 8h11V5c0-1.1-.9-2-2-2h-9v5zM3 8h5V3H5c-1.1 0-2 .9-2 2v3zm2 13h3V10H3v9c0 1.1.9 2 2 2zm8 1l-4-4 4-4zm1-9l4-4 4 4z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M14.58 19H13v-2h1.58c1.33 0 2.42-1.08 2.42-2.42V13h2v1.58c0 2.44-1.98 4.42-4.42 4.42z');
        $doc->addChild($l0I2);
    }
}
