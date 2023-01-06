<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['Android', 'OS', 'chrome', 'desktop', 'device', 'display', 'hardware', 'iOS', 'mac', 'monitor', 'screen', 'screengrab', 'screenshot', 'web', 'window'],
)]
final class ScreenshotMonitorSharpIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M22,3H2v16h6v2h8v-2h6V3z M20,17H4V5h16V17z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[6.5, 7.5], [9, 7.5], [9, 6], [5, 6], [5, 10], [6.5, 10]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[19, 12], [17.5, 12], [17.5, 14.5], [15, 14.5], [15, 16], [19, 16]]);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
