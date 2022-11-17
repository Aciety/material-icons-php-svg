<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['content'],
    tags: ['alarm', 'calendar', 'mail', 'message', 'notification', 'upcoming'],
)]
final class UpcomingRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M20.45,6.55L20.45,6.55c-0.38-0.38-1.01-0.38-1.39,0L16.89,8.7c-0.39,0.38-0.39,1.01,0,1.39l0.01,0.01 c0.39,0.39,1.01,0.39,1.4,0c0.62-0.63,1.52-1.54,2.15-2.17C20.83,7.55,20.83,6.93,20.45,6.55z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12.02,3h-0.03C11.44,3,11,3.44,11,3.98v3.03C11,7.56,11.44,8,11.98,8h0.03C12.56,8,13,7.56,13,7.02V3.98 C13,3.44,12.56,3,12.02,3z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M7.1,10.11l0.01-0.01c0.38-0.38,0.38-1.01,0-1.39L4.96,6.54c-0.38-0.39-1.01-0.39-1.39,0L3.55,6.55 c-0.39,0.39-0.39,1.01,0,1.39c0.63,0.62,1.53,1.54,2.15,2.17C6.09,10.49,6.72,10.49,7.1,10.11z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M12,15c-1.24,0-2.31-0.75-2.76-1.83C8.92,12.43,8.14,12,7.34,12L4,12c-1.1,0-2,0.9-2,2l0,5c0,1.1,0.9,2,2,2h16 c1.1,0,2-0.9,2-2v-5c0-1.1-0.9-2-2-2l-3.34,0c-0.8,0-1.58,0.43-1.9,1.17C14.31,14.25,13.24,15,12,15');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
