<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['!', 'alert', 'attention', 'caution', 'danger', 'error', 'exclamation', 'important', 'mark', 'nearby', 'notification', 'symbol', 'warning'],
)]
final class NearbyErrorIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M12,7.57l4.42,4.42L12,16.41l-4.42-4.42L12,7.57z M12,19.19l-7.2-7.2l7.2-7.2l6,6V7.16l-4.58-4.58 c-0.78-0.78-2.05-0.78-2.83,0l-8.01,8c-0.78,0.78-0.78,2.05,0,2.83l8.01,8c0.78,0.78,2.05,0.78,2.83,0L18,16.82v-3.63L12,19.19z M20,20h2v2h-2V20z M22,10h-2v8h2V10');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
