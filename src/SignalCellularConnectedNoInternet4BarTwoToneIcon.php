<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['!', '4', 'alert', 'attention', 'bar', 'caution', 'cell', 'cellular', 'connected', 'danger', 'data', 'error', 'exclamation', 'important', 'internet', 'mark', 'mobile', 'network', 'no', 'notification', 'phone', 'signal', 'symbol', 'warning', 'wifi', 'wireless'],
)]
final class SignalCellularConnectedNoInternet4BarTwoToneIcon extends SvgIcon
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M20,18h2v-8h-2V18z M20,22h2v-2h-2V22z M2,22h16V8h4V2L2,22z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
