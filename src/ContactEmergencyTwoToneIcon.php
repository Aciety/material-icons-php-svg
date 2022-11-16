<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ContactEmergencyTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M2,19h0.08c1.38-2.39,3.96-4,6.92-4s5.54,1.61,6.92,4H22V5H2V19z M15.03,8.15l0.75-1.3l1.47,0.85V6h1.5v1.7 l1.47-0.85l0.75,1.3L19.5,9l1.47,0.85l-0.75,1.3l-1.47-0.85V12h-1.5v-1.7l-1.47,0.85l-0.75-1.3L16.5,9L15.03,8.15z M9,8 c1.65,0,3,1.35,3,3s-1.35,3-3,3s-3-1.35-3-3S7.35,8,9,8z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M9,14c1.65,0,3-1.35,3-3s-1.35-3-3-3s-3,1.35-3,3S7.35,14,9,14z M9,10c0.54,0,1,0.46,1,1s-0.46,1-1,1s-1-0.46-1-1 S8.46,10,9,10z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M22,3H2C0.9,3,0,3.9,0,5v14c0,1.1,0.9,2,2,2h20c1.1,0,1.99-0.9,1.99-2L24,5C24,3.9,23.1,3,22,3z M4.54,19 c1.1-1.22,2.69-2,4.46-2s3.36,0.78,4.46,2H4.54z M22,19h-6.08c-1.38-2.39-3.96-4-6.92-4s-5.54,1.61-6.92,4H2V5h20V19z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[15.78, 11.15], [17.25, 10.3], [17.25, 12], [18.75, 12], [18.75, 10.3], [20.22, 11.15], [20.97, 9.85], [19.5, 9], [20.97, 8.15], [20.22, 6.85], [18.75, 7.7], [18.75, 6], [17.25, 6], [17.25, 7.7], [15.78, 6.85], [15.03, 8.15], [16.5, 9], [15.03, 9.85]]);
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
