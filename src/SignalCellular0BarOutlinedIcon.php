<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['0', 'bar', 'cell', 'cellular', 'data', 'internet', 'mobile', 'network', 'phone', 'signal', 'speed', 'wifi', 'wireless'],
)]
final class SignalCellular0BarOutlinedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M2,22h20V2L2,22z M20,20H6.83L20,6.83V20z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
