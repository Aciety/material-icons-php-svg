<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['search'],
    tags: ['appliances', 'beverage', 'coffee', 'cup', 'drink', 'machine', 'maker', 'mug'],
)]
final class CoffeeMakerRoundedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M18,6V4h1c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h13c0.55,0,1-0.45,1-1v0 c0-0.55-0.45-1-1-1h-3.03C17.2,19.09,18,17.64,18,16v-3c0-1.1-0.9-2-2-2h-6c-1.1,0-2,0.9-2,2v3c0,1.64,0.81,3.09,2.03,4H6V4h2v2 c0,0.55,0.45,1,1,1h8C17.55,7,18,6.55,18,6z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '13', cy: '9', r: '1');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
