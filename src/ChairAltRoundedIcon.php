<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['search'],
    tags: ['cahir', 'furniture', 'home', 'house', 'kitchen', 'lounging', 'seating', 'table'],
)]
final class ChairAltRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M17,10c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2H7C5.9,3,5,3.9,5,5v3c0,1.1,0.9,2,2,2h1v2H7c-1.1,0-2,0.9-2,2v6 c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-2h10v2c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-6c0-1.1-0.9-2-2-2h-1v-2H17z M7,8V5h10v3 H7z M17,16H7v-2h10V16z M14,12h-4v-2h4V12z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
