<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['device'],
    tags: ['alt', 'analytics', 'bar', 'cell', 'cellular', 'chart', 'data', 'diagram', 'graph', 'infographic', 'internet', 'measure', 'metrics', 'mobile', 'network', 'phone', 'signal', 'statistics', 'tracking', 'wifi', 'wireless'],
)]
final class SignalCellularAltOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M17 4h3v16h-3V4zM5 14h3v6H5v-6zm6-5h3v11h-3V9z');
        $doc->addChild($l0I1);
    }
}
