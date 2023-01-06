<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['bars', 'format', 'horizontal', 'layout', 'lines', 'split', 'stacked'],
)]
final class HorizontalSplitTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 15v2H5v-2h14m2-10H3v2h18V5zm0 4H3v2h18V9zm0 4H3v6h18v-6z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M5 15h14v2H5z');
        $l0I2->setStyle('opacity', '.3');
        $doc->addChild($l0I2);
    }
}
