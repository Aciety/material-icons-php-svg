<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['charge', 'cord', 'electric', 'electrical', 'plug', 'power', 'services', 'wire'],
)]
final class ElectricalServicesTwoToneIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M20,15h-2v-2h2c0.55,0,1,0.45,1,1v0C21,14.55,20.55,15,20,15z');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M20,19h-2v-2h2c0.55,0,1,0.45,1,1v0C21,18.55,20.55,19,20,19z');
        $l0I1->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M14,12L14,12L14,12c-1.1,0-2,0.9-2,2v0h-2v4h2v0c0,1.1,0.9,2,2,2h0h3l0,0v-8H14z');
        $l0I1->addChild($l1I2);
        $l1I3 = new SVGPath(d: 'M4,5L4,5c0,0.55,0.45,1,1,1h3.5C9.33,6,10,6.67,10,7.5v0C10,8.33,9.33,9,8.5,9H7c-2.21,0-4,1.79-4,4v0c0,2.21,1.79,4,4,4h2 v-2H7c-1.1,0-2-0.9-2-2v0c0-1.1,0.9-2,2-2h1.5c1.93,0,3.5-1.57,3.5-3.5v0C12,5.57,10.43,4,8.5,4H5C4.45,4,4,4.45,4,5z');
        $l0I1->addChild($l1I3);
        $doc->addChild($l0I1);
    }
}
