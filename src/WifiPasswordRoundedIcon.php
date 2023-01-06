<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['(scan)', '[cellular', 'connection', 'data', 'internet', 'lock', 'mobile]', 'network', 'password', 'secure', 'service', 'signal', 'wifi', 'wireless'],
)]
final class WifiPasswordRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M18.49,12.13C16.67,10.79,14.43,10,12,10c-2.43,0-4.67,0.79-6.49,2.13c-0.72,0.53-0.76,1.6-0.13,2.24 c0.53,0.54,1.37,0.57,1.98,0.12C8.67,13.55,10.27,13,12,13c1.73,0,3.33,0.55,4.64,1.49c0.62,0.44,1.45,0.41,1.98-0.12 C19.26,13.73,19.22,12.66,18.49,12.13z M22.8,7.89C19.86,5.46,16.1,4,12,4S4.14,5.46,1.2,7.89C0.53,8.44,0.49,9.47,1.11,10.1l0,0 c0.55,0.55,1.42,0.58,2.02,0.09C5.55,8.2,8.64,7,12,7s6.45,1.2,8.87,3.19c0.6,0.49,1.47,0.46,2.02-0.09l0,0 C23.51,9.47,23.47,8.44,22.8,7.89z M12,16c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S13.1,16,12,16z M23,19v-1c0-1.1-0.9-2-2-2 s-2,0.9-2,2v1c-0.55,0-1,0.45-1,1v3c0,0.55,0.45,1,1,1h4c0.55,0,1-0.45,1-1v-3C24,19.45,23.55,19,23,19z M22,19h-2v-1 c0-0.55,0.45-1,1-1s1,0.45,1,1V19z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
