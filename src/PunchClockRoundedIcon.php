<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['clock', 'date', 'punch', 'schedule', 'time', 'timer', 'timesheet'],
)]
final class PunchClockRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M19,6h-1V3c0-1.1-0.9-2-2-2H8C6.9,1,6,1.9,6,3v3H5C3.9,6,3,6.9,3,8v12c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V8 C21,6.9,20.1,6,19,6z M8,3h8v3H8V3z M12,19c-2.76,0-5-2.24-5-5s2.24-5,5-5c2.76,0,5,2.24,5,5S14.76,19,12,19z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12.5,13.79V12c0-0.28-0.22-0.5-0.5-0.5h0c-0.28,0-0.5,0.22-0.5,0.5v2c0,0.13,0.05,0.26,0.15,0.35l1.14,1.14 c0.2,0.2,0.51,0.2,0.71,0c0.2-0.2,0.2-0.51,0-0.71L12.5,13.79z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
