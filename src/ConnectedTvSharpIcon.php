<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['Android', 'OS', 'airplay', 'chrome', 'connect', 'connected', 'desktop', 'device', 'display', 'hardware', 'iOS', 'mac', 'monitor', 'screen', 'screencast', 'streaming', 'television', 'tv', 'web', 'window', 'wireless'],
)]
final class ConnectedTvSharpIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M8.57,16H10c0-2.76-2.24-5-5-5v1.43C6.97,12.43,8.57,14.03,8.57,16z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M11.55,16H13c0-4.42-3.59-8-8-8v1.45C8.61,9.45,11.55,12.38,11.55,16z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M5,14v2h2C7,14.89,6.11,14,5,14z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M22,3H2v16h6v2h8v-2h6V3z M20,17H4V5h16V17z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
