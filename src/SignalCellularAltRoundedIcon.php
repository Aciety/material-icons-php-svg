<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['device'],
    tags: ['alt', 'analytics', 'bar', 'cell', 'cellular', 'chart', 'data', 'diagram', 'graph', 'infographic', 'internet', 'measure', 'metrics', 'mobile', 'network', 'phone', 'signal', 'statistics', 'tracking', 'wifi', 'wireless'],
)]
final class SignalCellularAltRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18.5 4c.83 0 1.5.67 1.5 1.5v13c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5v-13c0-.83.67-1.5 1.5-1.5zm-12 10c.83 0 1.5.67 1.5 1.5v3c0 .83-.67 1.5-1.5 1.5S5 19.33 5 18.5v-3c0-.83.67-1.5 1.5-1.5zm6-5c.83 0 1.5.67 1.5 1.5v8c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5v-8c0-.83.67-1.5 1.5-1.5z');
        $doc->addChild($l0I1);
    }
}
