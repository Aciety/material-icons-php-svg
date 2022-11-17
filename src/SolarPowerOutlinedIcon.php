<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['home'],
    tags: ['eco', 'energy', 'heat', 'nest', 'power', 'solar', 'sun', 'sunny'],
)]
final class SolarPowerOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M20,12H4L2,22h20L20,12z M18.36,14l0.4,2H13v-2H18.36z M11,14v2H5.24l0.4-2H11z M4.84,18H11v2H4.44L4.84,18z M13,20v-2 h6.16l0.4,2H13z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '11', y: '8', width: '2', height: '3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '16.53', y: '6.06', width: '2', height: '3');
        $l2I2->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -0.2089 14.6085)');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '4.97', y: '6.56', width: '3', height: '2');
        $l2I3->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -3.448 6.7885)');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '3', y: '2', width: '3', height: '2');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGRect(x: '18', y: '2', width: '3', height: '2');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M12,7c2.76,0,5-2.24,5-5h-2c0,1.65-1.35,3-3,3S9,3.65,9,2H7C7,4.76,9.24,7,12,7z');
        $l1I0->addChild($l2I6);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
