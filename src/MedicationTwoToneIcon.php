<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['doctor', 'drug', 'emergency', 'hospital', 'medication', 'medicine', 'pharmacy', 'pills', 'prescription'],
)]
final class MedicationTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M7,19h10V8H7V19z M8,12h2.5V9.5h3V12H16v3h-2.5v2.5h-3V15H8V12z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '6', y: '3', width: '12', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M17,6H7C5.9,6,5,6.9,5,8v11c0,1.1,0.9,2,2,2h10c1.1,0,2-0.9,2-2V8C19,6.9,18.1,6,17,6z M17,19H7V8h10V19z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[10.5, 17.5], [13.5, 17.5], [13.5, 15], [16, 15], [16, 12], [13.5, 12], [13.5, 9.5], [10.5, 9.5], [10.5, 12], [8, 12], [8, 15], [10.5, 15]]);
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
