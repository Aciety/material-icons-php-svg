<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['!', '4', 'alert', 'attention', 'caution', 'cell', 'cellular', 'connected', 'danger', 'data', 'error', 'exclamation', 'important', 'internet', 'mark', 'mobile', 'network', 'no', 'notification', 'phone', 'signal', 'speed', 'statusbar', 'symbol', 'warning', 'wifi', 'wireless'],
)]
final class SignalWifiStatusbarConnectedNoInternet4RoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22.92,8H17v7.99l-4.29,4.3c-0.39,0.39-1.02,0.39-1.42,0L0.73,9.71C0.32,9.3,0.35,8.63,0.79,8.24C3.78,5.6,7.7,4,12,4 C16.16,4,19.97,5.51,22.92,8z M20,18c-0.55,0-1,0.45-1,1s0.45,1,1,1s1-0.45,1-1S20.55,18,20,18z M20,10c-0.55,0-1,0.45-1,1v4 c0,0.55,0.45,1,1,1s1-0.45,1-1v-4C21,10.45,20.55,10,20,10z');
        $doc->addChild($l0I1);
    }
}
