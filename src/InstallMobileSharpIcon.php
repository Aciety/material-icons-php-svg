<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['Android', 'OS', 'cell', 'device', 'hardware', 'iOS', 'install', 'mobile', 'phone', 'pwa', 'tablet'],
)]
final class InstallMobileSharpIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[17, 18], [7, 18], [7, 6], [14, 6], [14, 1], [5, 1], [5, 23], [19, 23], [19, 16], [17, 16]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[18, 14], [23, 9], [21.59, 7.59], [19, 10.17], [19, 3], [17, 3], [17, 10.17], [14.41, 7.59], [13, 9]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
