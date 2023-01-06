<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['active', 'alarm', 'alert', 'bell', 'chime', 'circle', 'notifications', 'notify', 'reminder', 'ring', 'sound'],
)]
final class CircleNotificationsRoundedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,18.5c-0.83,0-1.5-0.67-1.5-1.5h3 C13.5,17.83,12.83,18.5,12,18.5z M16,16H8c-0.55,0-1-0.45-1-1v0c0-0.55,0.45-1,1-1l0-3c0-1.86,1.28-3.41,3-3.86V6.5 c0-0.55,0.45-1,1-1s1,0.45,1,1v0.64c1.72,0.45,3,2,3,3.86l0,3c0.55,0,1,0.45,1,1v0C17,15.55,16.55,16,16,16z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
