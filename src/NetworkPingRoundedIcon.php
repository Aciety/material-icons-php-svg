<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alert', 'available', 'cellular', 'connection', 'data', 'internet', 'ip', 'mobile', 'network', 'ping', 'service', 'signal', 'wifi', 'wireless'],
)]
final class NetworkPingRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M2.71,6.79c-0.39,0.39-0.39,1.02,0,1.41L10.5,16H5c-0.55,0-1,0.45-1,1s0.45,1,1,1h14c0.55,0,1-0.45,1-1s-0.45-1-1-1h-5.5 l5.15-5.15C18.91,10.95,19.2,11,19.5,11c1.38,0,2.5-1.12,2.5-2.5S20.88,6,19.5,6S17,7.12,17,8.5c0,0.35,0.07,0.67,0.2,0.97 l-5.2,5.2L4.12,6.79C3.73,6.4,3.1,6.4,2.71,6.79z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
