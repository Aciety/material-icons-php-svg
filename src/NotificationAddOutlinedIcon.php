<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['+', 'active', 'add', 'alarm', 'alert', 'bell', 'chime', 'notification', 'notifications', 'notify', 'plus', 'reminder', 'ring', 'sound', 'symbol'],
)]
final class NotificationAddOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: '0', y: '0', width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M16,14v3H8v-7c0-2.21,1.79-4,4-4c0.85,0,1.64,0.26,2.28,0.72l1.43-1.43c-0.64-0.51-1.39-0.88-2.21-1.09V3.5 C13.5,2.67,12.83,2,12,2s-1.5,0.67-1.5,1.5v0.7C7.91,4.86,6,7.21,6,10v7H4v2h16v-2h-2v-3H16z M12,22c1.1,0,2-0.9,2-2h-4 C10,21.1,10.9,22,12,22z M24,8h-3V5h-2v3h-3v2h3v3h2v-3h3V8z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
