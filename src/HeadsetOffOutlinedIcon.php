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
final class HeadsetOffOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M12,4c3.87,0,7,3.13,7,7v1h-4v0.17L16.83,14H19v2.17l2,2V11c0-4.97-4.03-9-9-9C9.98,2,8.12,2.67,6.62,3.8l1.43,1.43 C9.17,4.45,10.53,4,12,4z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M2.1,2.1L0.69,3.51l3.33,3.33C3.37,8.09,3,9.5,3,11v7c0,1.1,0.9,2,2,2h4v-8H5v-1c0-0.94,0.19-1.83,0.52-2.65L15,17.83V20 h2.17l1,1H12v2h7c0.34,0,0.65-0.09,0.93-0.24l0.55,0.55l1.41-1.41L2.1,2.1z M7,14v4H5v-4H7z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
