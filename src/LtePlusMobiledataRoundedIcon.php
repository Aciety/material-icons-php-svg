<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['+', 'alphabet', 'character', 'data', 'font', 'internet', 'letter', 'lte', 'mobile', 'network', 'plus', 'speed', 'symbol', 'text', 'type', 'wifi', 'wireless'],
)]
final class LtePlusMobiledataRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M3,14h2c0.55,0,1,0.45,1,1v0c0,0.55-0.45,1-1,1H2c-0.55,0-1-0.45-1-1V9c0-0.55,0.45-1,1-1h0c0.55,0,1,0.45,1,1V14z M6,10 h1v5c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-5h1c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H6C5.45,8,5,8.45,5,9v0 C5,9.55,5.45,10,6,10z M13,16h3c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h-2v-1h2c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h-2v-1h2 c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h-3c-0.55,0-1,0.45-1,1v6C12,15.55,12.45,16,13,16z M23,11h-1v-1c0-0.55-0.45-1-1-1h0 c-0.55,0-1,0.45-1,1v1h-1c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h1v1c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-1h1 c0.55,0,1-0.45,1-1v0C24,11.45,23.55,11,23,11z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
