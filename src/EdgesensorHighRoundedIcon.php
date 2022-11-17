<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['Android', 'OS', 'cell', 'device', 'edge', 'hardware', 'high', 'iOS', 'mobile', 'move', 'phone', 'sensitivity', 'sensor', 'tablet', 'vibrate'],
)]
final class EdgesensorHighRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M4,7L4,7c0.55,0,1,0.45,1,1v5c0,0.55-0.45,1-1,1h0c-0.55,0-1-0.45-1-1V8C3,7.45,3.45,7,4,7z M1,10L1,10c0.55,0,1,0.45,1,1 v5c0,0.55-0.45,1-1,1h0c-0.55,0-1-0.45-1-1v-5C0,10.45,0.45,10,1,10z M23,7L23,7c0.55,0,1,0.45,1,1v5c0,0.55-0.45,1-1,1h0 c-0.55,0-1-0.45-1-1V8C22,7.45,22.45,7,23,7z M20,10L20,10c0.55,0,1,0.45,1,1v5c0,0.55-0.45,1-1,1h0c-0.55,0-1-0.45-1-1v-5 C19,10.45,19.45,10,20,10z M16,2.01L8,2C6.9,2,6,2.9,6,4v16c0,1.1,0.9,2,2,2h8c1.1,0,2-0.9,2-2V4C18,2.9,17.1,2.01,16,2.01z M16,17H8V7h8V17z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
