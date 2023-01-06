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
    tags: ['Android', 'OS', 'chrome', 'desktop', 'device', 'display', 'fix', 'hardware', 'iOS', 'install', 'mac', 'monitor', 'place', 'pwa', 'screen', 'web', 'window'],
)]
final class InstallDesktopTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[14.83, 9], [14.83, 9], [16, 10.17]]);
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[4, 17], [20, 17], [20, 13.83], [17, 16.83], [9.17, 9], [13, 5.17], [13, 5], [4, 5]]);
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20,17H4V5h9V3H4C2.89,3,2,3.89,2,5v12c0,1.1,0.89,2,2,2h4v2h8v-2h4c1.1,0,2-0.9,2-2v-5.17l-2,2V17z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[18, 10.17], [18, 3], [16, 3], [16, 10.17], [13.41, 7.59], [12, 9], [17, 14], [22, 9], [20.59, 7.59]]);
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
