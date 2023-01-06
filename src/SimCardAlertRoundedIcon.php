<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['!', 'alert', 'attention', 'camera', 'card', 'caution', 'danger', 'digital', 'error', 'exclamation', 'important', 'mark', 'memory', 'notification', 'photos', 'sd', 'secure', 'storage', 'symbol', 'warning'],
)]
final class SimCardAlertRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M18,2h-7.17C10.3,2,9.79,2.21,9.41,2.59L4.6,7.42C4.23,7.79,4.02,8.3,4.02,8.82L4,20c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2 V4C20,2.9,19.1,2,18,2z M12,17L12,17c-0.55,0-1-0.45-1-1v0c0-0.55,0.45-1,1-1h0c0.55,0,1,0.45,1,1v0C13,16.55,12.55,17,12,17z M12,13L12,13c-0.55,0-1-0.45-1-1V9c0-0.55,0.45-1,1-1l0,0c0.55,0,1,0.45,1,1v3C13,12.55,12.55,13,12,13z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
