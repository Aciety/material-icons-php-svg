<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ContactEmergencyRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M22,3H2C0.9,3,0,3.9,0,5v14c0,1.1,0.9,2,2,2h20c1.1,0,1.99-0.9,1.99-2L24,5C24,3.9,23.1,3,22,3z M9,8c1.65,0,3,1.35,3,3 s-1.35,3-3,3s-3-1.35-3-3S7.35,8,9,8z M2.08,19c1.38-2.39,3.96-4,6.92-4s5.54,1.61,6.92,4H2.08z M20.6,10.5L20.6,10.5 c-0.21,0.36-0.67,0.48-1.02,0.27l-0.82-0.48v0.95c0,0.41-0.34,0.75-0.75,0.75h0c-0.41,0-0.75-0.34-0.75-0.75V10.3l-0.82,0.48 c-0.36,0.21-0.82,0.08-1.02-0.27l0,0c-0.21-0.36-0.08-0.82,0.27-1.02L16.5,9l-0.82-0.48c-0.36-0.21-0.48-0.67-0.27-1.02l0,0 c0.21-0.36,0.67-0.48,1.02-0.27l0.82,0.48V6.75C17.25,6.34,17.59,6,18,6h0c0.41,0,0.75,0.34,0.75,0.75V7.7l0.82-0.48 c0.36-0.21,0.82-0.08,1.02,0.27v0c0.21,0.36,0.08,0.82-0.27,1.02L19.5,9l0.82,0.48C20.68,9.68,20.81,10.14,20.6,10.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
