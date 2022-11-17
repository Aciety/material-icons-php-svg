<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['alphabet', 'camera', 'character', 'circle', 'disabled', 'dynamic', 'enabled', 'font', 'hdr', 'high', 'letter', 'off', 'on', 'photo', 'range', 'select', 'slash', 'symbol', 'text', 'type'],
)]
final class HdrOffSelectSharpIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M18,20v-4h-5v6h1.5v-2h1.1l0.9,2H18l-0.86-2L18,20z M16.5,18.5h-2v-1h2V18.5z M3.5,18h-2v-2H0v6h1.5v-2.5h2V22H5v-6H3.5 V18z M10,16H6.5v6H10c0.8,0,1.5-0.7,1.5-1.5v-3C11.5,16.7,10.8,16,10,16z M10,20.5H8v-3h2V20.5z M24,20h-2v2h-1.5v-2h-2v-1.5h2v-2 H22v2h2V20z M10.98,4.15L9.42,2.59c5.1-2.42,10.41,2.89,7.99,7.99l-1.56-1.56C16.66,6.06,13.94,3.34,10.98,4.15z M6.34,2.34 L4.93,3.76l1.66,1.66c-2.42,5.1,2.89,10.41,7.99,7.99l1.66,1.66l1.41-1.41L6.34,2.34z M8.15,6.98l4.87,4.87 C10.06,12.66,7.34,9.94,8.15,6.98z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
