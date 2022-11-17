<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['Android', 'OS', 'application', 'change', 'chrome', 'desktop', 'details', 'device', 'display', 'gear', 'hardware', 'iOS', 'info', 'information', 'mac', 'monitor', 'options', 'personal', 'screen', 'service', 'settings', 'web', 'window'],
)]
final class DisplaySettingsSharpIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M22,3H2v16h6v2h8v-2h6V3z M20,17H4V5h16V17z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '6', y: '8.25', width: '8', height: '1.5');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[16.5, 9.75], [18, 9.75], [18, 8.25], [16.5, 8.25], [16.5, 7], [15, 7], [15, 11], [16.5, 11]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '10', y: '12.25', width: '8', height: '1.5');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPolygon(points: [[7.5, 15], [9, 15], [9, 11], [7.5, 11], [7.5, 12.25], [6, 12.25], [6, 13.75], [7.5, 13.75]]);
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
