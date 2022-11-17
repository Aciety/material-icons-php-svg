<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['!', '0', 'alert', 'attention', 'bar', 'caution', 'cell', 'cellular', 'connected', 'danger', 'data', 'error', 'exclamation', 'important', 'internet', 'mark', 'mobile', 'network', 'no', 'notification', 'phone', 'signal', 'symbol', 'warning', 'wifi', 'wireless'],
)]
final class SignalCellularConnectedNoInternet0BarSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20,18h2v-8h-2V18z M20,22h2v-2h-2V22z M18,20v2H2L22,2v6h-2V6.83L6.83,20H18z');
        $doc->addChild($l0I1);
    }
}
