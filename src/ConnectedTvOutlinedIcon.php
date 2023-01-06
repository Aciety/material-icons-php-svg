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
final class ConnectedTvOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M20,3H4C2.9,3,2,3.9,2,5v12c0,1.1,0.9,2,2,2h4v2h8v-2h4c1.1,0,1.99-0.9,1.99-2L22,5C22,3.9,21.1,3,20,3z M20,17H4V5h16V17 z M5,14v2h2C7,14.89,6.11,14,5,14z M5,11v1.43c1.97,0,3.57,1.6,3.57,3.57H10C10,13.24,7.76,11,5,11z M5,8v1.45 c3.61,0,6.55,2.93,6.55,6.55H13C13,11.58,9.41,8,5,8z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
