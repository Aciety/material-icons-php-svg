<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['search'],
    tags: ['appliances', 'beverage', 'coffee', 'cup', 'drink', 'machine', 'maker', 'mug'],
)]
final class CoffeeMakerTwoToneIcon extends SVG
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M13,19c1.65,0,3-1.35,3-3v-3h-6v3C10,17.65,11.35,19,13,19z');
        $l3I0->setStyle('opacity', '.3');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGPath(d: 'M9,7h8c0.55,0,1-0.45,1-1V4h2V2H6C4.9,2,4,2.9,4,4v16c0,1.1,0.9,2,2,2h14v-2h-4.03C17.2,19.09,18,17.64,18,16v-5H8v5 c0,1.64,0.81,3.09,2.03,4H6V4h2v2C8,6.55,8.45,7,9,7z M10,16v-3h6v3c0,1.65-1.35,3-3,3S10,17.65,10,16z');
        $l2I0->addChild($l3I1);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '13', cy: '9', r: '1');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
