<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['accessory', 'audio', 'chat', 'device', 'disabled', 'ear', 'earphone', 'enabled', 'headphones', 'headset', 'listen', 'mic', 'music', 'off', 'on', 'slash', 'sound', 'talk'],
)]
final class HeadsetOffRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M12,4c3.87,0,7,3.13,7,7v1h-2c-0.6,0-1.13,0.27-1.49,0.68L21,18.17V11c0-4.97-4.03-9-9-9C9.98,2,8.12,2.67,6.62,3.8 l1.43,1.43C9.17,4.45,10.53,4,12,4z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M21.19,21.19L2.81,2.81c-0.39-0.39-1.02-0.39-1.41,0C1,3.2,1,3.83,1.39,4.22l2.63,2.63C3.37,8.09,3,9.5,3,11v7 c0,1.1,0.9,2,2,2h2c1.1,0,2-0.9,2-2v-4c0-1.1-0.9-2-2-2H5v-1c0-0.94,0.19-1.83,0.52-2.65L15,17.83V18c0,1.1,0.9,2,2,2h0.17l1,1H13 c-0.55,0-1,0.45-1,1s0.45,1,1,1h6c0.36,0,0.68-0.1,0.97-0.26c0.38,0.23,0.89,0.2,1.22-0.13C21.58,22.22,21.58,21.58,21.19,21.19z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
