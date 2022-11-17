<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['+', 'add', 'battery', 'charge', 'charging', 'new', 'plus', 'power', 'saver', 'symbol'],
)]
final class BatterySaverRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M16,4h-2V3c0-0.55-0.45-1-1-1h-2c-0.55,0-1,0.45-1,1v1H8C7.45,4,7,4.45,7,5v16c0,0.55,0.45,1,1,1h8c0.55,0,1-0.45,1-1V5 C17,4.45,16.55,4,16,4z M14,14h-1v1c0,0.55-0.45,1-1,1h0c-0.55,0-1-0.45-1-1v-1h-1c-0.55,0-1-0.45-1-1v0c0-0.55,0.45-1,1-1h1v-1 c0-0.55,0.45-1,1-1h0c0.55,0,1,0.45,1,1v1h1c0.55,0,1,0.45,1,1v0C15,13.55,14.55,14,14,14z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
