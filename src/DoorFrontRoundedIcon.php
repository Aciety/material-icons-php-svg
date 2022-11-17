<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['search'],
    tags: ['closed', 'door', 'doorway', 'entrance', 'exit', 'front', 'home', 'house', 'way'],
)]
final class DoorFrontRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M20,19h-1V5c0-1.1-0.9-2-2-2H7C5.9,3,5,3.9,5,5v14H4c-0.55,0-1,0.45-1,1c0,0.55,0.45,1,1,1h16c0.55,0,1-0.45,1-1 C21,19.45,20.55,19,20,19z M14,13c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1C15,12.55,14.55,13,14,13z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
