<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['alphabet', 'character', 'data', 'font', 'internet', 'letter', 'lte', 'mobile', 'network', 'speed', 'symbol', 'text', 'type', 'wifi', 'wireless'],
)]
final class LteMobiledataRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M6,14h2c0.55,0,1,0.45,1,1v0c0,0.55-0.45,1-1,1H5c-0.55,0-1-0.45-1-1V9c0-0.55,0.45-1,1-1h0c0.55,0,1,0.45,1,1V14z M10,10 h1v5c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-5h1c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h-4C9.45,8,9,8.45,9,9v0 C9,9.55,9.45,10,10,10z M21,9L21,9c0-0.55-0.45-1-1-1h-3c-0.55,0-1,0.45-1,1v6c0,0.55,0.45,1,1,1h3c0.55,0,1-0.45,1-1v0 c0-0.55-0.45-1-1-1h-2v-1h2c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h-2v-1h2C20.55,10,21,9.55,21,9z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
