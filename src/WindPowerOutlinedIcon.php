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
    tags: ['eco', 'energy', 'nest', 'power', 'wind', 'windy'],
)]
final class WindPowerOutlinedIcon extends SVG
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
        $l2I0 = new SVGRect(x: '4', y: '3', width: '6', height: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '1', y: '7', width: '5', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '3', y: '19', width: '5', height: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M22.21,18.61l-2.28-4.1c-0.27-0.48-0.73-0.83-1.26-0.97l-2.69-0.67c-0.02-0.47-0.14-0.92-0.37-1.33l3.96-6.59 c0.65-1.08,0.3-2.48-0.78-3.13c-0.36-0.22-0.77-0.32-1.17-0.32c-0.56,0-1.12,0.21-1.56,0.62l-3.43,3.21C12.23,5.7,12,6.23,12,6.78 v3.4c-0.47,0.17-0.89,0.45-1.23,0.82H3.28C2.02,11,1,12.02,1,13.28c0,1.02,0.67,1.91,1.65,2.19l4.51,1.29 c0.18,0.05,0.37,0.08,0.55,0.08c0.36,0,0.72-0.1,1.03-0.29l2.24-1.34c0.29,0.26,0.63,0.47,1.02,0.61V21c-1.1,0-2,0.9-2,2h6 c0-1.1-0.9-2-2-2v-4.28l4.61,4.61c0.45,0.45,1.03,0.67,1.61,0.67c0.58,0,1.17-0.22,1.61-0.67h0 C22.55,20.61,22.71,19.5,22.21,18.61z M7.72,14.84L3.2,13.55C3.08,13.52,3,13.4,3,13.28C3,13.13,3.13,13,3.28,13h6.73 c0,0.15,0.01,0.3,0.03,0.44L7.72,14.84z M13,14c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1C14,13.55,13.55,14,13,14z M14,10.14V6.78l3.43-3.21c0.05-0.05,0.19-0.12,0.34-0.04c0.13,0.08,0.18,0.25,0.1,0.38l-3.74,6.24L14,10.14z M20.42,19.92 c-0.05,0.05-0.24,0.16-0.4,0l-4.85-4.85c0.08-0.09,0.16-0.18,0.24-0.28l2.78,0.69l2.28,4.1C20.53,19.69,20.51,19.83,20.42,19.92z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
