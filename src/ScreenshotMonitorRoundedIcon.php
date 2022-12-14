<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['Android', 'OS', 'chrome', 'desktop', 'device', 'display', 'hardware', 'iOS', 'mac', 'monitor', 'screen', 'screengrab', 'screenshot', 'web', 'window'],
)]
final class ScreenshotMonitorRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M20,3H4C2.9,3,2,3.9,2,5v12c0,1.1,0.89,2,2,2h4v1c0,0.55,0.45,1,1,1h6c0.55,0,1-0.45,1-1v-1h4c1.1,0,2-0.9,2-2V5 C22,3.89,21.1,3,20,3z M20,17H4V5h16V17z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M6.5,7.5h1.75C8.66,7.5,9,7.16,9,6.75v0C9,6.34,8.66,6,8.25,6H6C5.45,6,5,6.45,5,7v2.25C5,9.66,5.34,10,5.75,10h0 C6.16,10,6.5,9.66,6.5,9.25V7.5z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M18.25,12L18.25,12c-0.41,0-0.75,0.34-0.75,0.75v1.75h-1.75c-0.41,0-0.75,0.34-0.75,0.75v0c0,0.41,0.34,0.75,0.75,0.75H18 c0.55,0,1-0.45,1-1v-2.25C19,12.34,18.66,12,18.25,12z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
