<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['bed', 'bedroom', 'double', 'furniture', 'home', 'hotel', 'house', 'king', 'night', 'pillows', 'queen', 'rest', 'room', 'sleep'],
)]
final class KingBedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGRect(x: '6', y: '7', width: '5', height: '3');
        $l2I0->setStyle('fill', 'none');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '13', y: '7', width: '5', height: '3');
        $l2I1->setStyle('fill', 'none');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20,10V7c0-1.1-0.9-2-2-2H6C4.9,5,4,5.9,4,7v3c-1.1,0-2,0.9-2,2v5h1.33L4,19h1l0.67-2h12.67L19,19h1l0.67-2H22v-5 C22,10.9,21.1,10,20,10z M11,10H6V7h5V10z M18,10h-5V7h5V10z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
