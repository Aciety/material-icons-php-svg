<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['3g', 'alphabet', 'cellular', 'character', 'digit', 'font', 'letter', 'mobile', 'mobiledata', 'network', 'number', 'phone', 'signal', 'speed', 'symbol', 'text', 'type', 'wifi'],
)]
final class ThreeGMobiledataSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M3,7v2h5v2H4v2h4v2H3v2h7V7H3z M21,11v6h-9V7h9v2h-7v6h5v-2h-2.5v-2H21z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
