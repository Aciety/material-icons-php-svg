<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['!', 'alert', 'attention', 'automobile', 'bus', 'car', 'cars', 'caution', 'danger', 'error', 'exclamation', 'important', 'maps', 'mark', 'notification', 'symbol', 'transportation', 'vehicle', 'warning'],
)]
final class BusAlertRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M4,11V8h7.29c-0.77-2.6,0.21-4.61,0.37-4.97C2.97,2.67,2,5.02,2,7v9.5c0,0.95,0.38,1.81,1,2.44v1.56 C3,21.33,3.67,22,4.5,22h0C5.33,22,6,21.33,6,20.5V20h8v0.5c0,0.82,0.67,1.5,1.5,1.5h0c0.82,0,1.5-0.67,1.5-1.5v-1.56 c0.62-0.63,1-1.49,1-2.44V13c-1.91,0-3.63-0.76-4.89-2H4z M6.5,17C5.67,17,5,16.33,5,15.5S5.67,14,6.5,14S8,14.67,8,15.5 S7.33,17,6.5,17z M15,15.5c0,0.83-0.67,1.5-1.5,1.5S12,16.33,12,15.5s0.67-1.5,1.5-1.5S15,14.67,15,15.5z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M18,1c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5S20.76,1,18,1z M18.5,6.5C18.5,6.78,18.28,7,18,7s-0.5-0.22-0.5-0.5v-3 C17.5,3.22,17.72,3,18,3s0.5,0.22,0.5,0.5V6.5z M18.5,8.5C18.5,8.78,18.28,9,18,9s-0.5-0.22-0.5-0.5S17.72,8,18,8 S18.5,8.22,18.5,8.5z');
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
