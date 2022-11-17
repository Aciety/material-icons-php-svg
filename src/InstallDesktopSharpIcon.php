<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['Android', 'OS', 'chrome', 'desktop', 'device', 'display', 'fix', 'hardware', 'iOS', 'install', 'mac', 'monitor', 'place', 'pwa', 'screen', 'web', 'window'],
)]
final class InstallDesktopSharpIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[20, 17], [4, 17], [4, 5], [12, 5], [12, 3], [2, 3], [2, 19], [8, 19], [8, 21], [16, 21], [16, 19], [22, 19], [22, 14], [20, 14]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[17, 14], [22, 9], [20.59, 7.59], [18, 10.17], [18, 3], [16, 3], [16, 10.17], [13.41, 7.59], [12, 9]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
