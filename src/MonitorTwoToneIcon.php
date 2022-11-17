<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['hardware'],
    tags: ['Android', 'OS', 'chrome', 'device', 'display', 'hardware', 'iOS', 'mac', 'monitor', 'screen', 'web', 'window'],
)]
final class MonitorTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M20,3H4C2.9,3,2,3.9,2,5v11c0,1.1,0.9,2,2,2h3l-1,1v2h12v-2l-1-1h3c1.1,0,2-0.9,2-2V5C22,3.9,21.1,3,20,3z M20,16H4V5h16 V16z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGRect(x: '4', y: '5', width: '16', height: '11');
        $l1I1->setStyle('opacity', '.3');
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
