<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['Android', 'OS', 'arrow', 'device', 'export', 'forward', 'hardware', 'iOS', 'mobile', 'phone', 'right', 'send', 'share', 'tablet', 'to'],
)]
final class SendToMobileOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M18,8l4,4l-4,4l-1.41-1.41L18.17,13H13v-2h5.17l-1.59-1.59L18,8z M7,1.01L17,1c1.1,0,2,0.9,2,2v4h-2V6H7v12h10v-1h2v4 c0,1.1-0.9,2-2,2H7c-1.1,0-2-0.9-2-2V3C5,1.9,5.9,1.01,7,1.01z M7,21h10v-1H7V21z M7,4h10V3H7V4z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
