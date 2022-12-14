<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['Android', 'OS', 'arrow', 'cell', 'connect', 'device', 'direction', 'hardware', 'iOS', 'link', 'mobile', 'multiple', 'offline', 'phone', 'right', 'share', 'tablet'],
)]
final class OfflineShareOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M6,5H4v16c0,1.1,0.9,2,2,2h10v-2H6V5z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M18,1h-8C8.9,1,8,1.9,8,3v14c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V3C20,1.9,19.1,1,18,1z M18,17h-8v-1h8V17z M18,14h-8V6h8 V14z M18,4h-8V3h8V4z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M12.5,10.25h1.63l-0.69,0.69L14.5,12L17,9.5L14.5,7l-1.06,1.06l0.69,0.69H12c-0.55,0-1,0.45-1,1V12h1.5V10.25z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
