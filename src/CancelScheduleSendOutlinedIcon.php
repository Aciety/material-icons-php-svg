<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['cancel', 'email', 'mail', 'no', 'quit', 'remove', 'schedule', 'send', 'share', 'stop', 'x'],
)]
final class CancelScheduleSendOutlinedIcon extends SvgIcon
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M16.5,9c-0.42,0-0.83,0.04-1.24,0.11L1.01,3L1,10l10.06,1.34c-0.42,0.44-0.78,0.93-1.09,1.46L1,14l0.01,7l8.07-3.46 C9.59,21.19,12.71,24,16.5,24c4.14,0,7.5-3.36,7.5-7.5S20.64,9,16.5,9z M3,8.25l0.01-2.22l7.51,3.22L3,8.25z M9.1,15.36L3,17.97 v-2.22l6.17-0.82C9.14,15.07,9.12,15.21,9.1,15.36z M16.5,22c-3.03,0-5.5-2.47-5.5-5.5s2.47-5.5,5.5-5.5s5.5,2.47,5.5,5.5 S19.53,22,16.5,22z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[18.27, 14.03], [16.5, 15.79], [14.73, 14.03], [14.03, 14.73], [15.79, 16.5], [14.03, 18.27], [14.73, 18.97], [16.5, 17.21], [18.27, 18.97], [18.97, 18.27], [17.21, 16.5], [18.97, 14.73]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
