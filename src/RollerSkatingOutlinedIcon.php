<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class RollerSkatingOutlinedIcon extends SVG
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M20,12c0-1.79-1.19-3.34-2.91-3.82l-2.62-0.74C13.62,7.19,13,6.39,13,5.5V1H4v15h16V12z M18,14H6V3h5v1H9.5 C9.22,4,9,4.22,9,4.5C9,4.78,9.22,5,9.5,5H11l0.1,1H9.5C9.22,6,9,6.22,9,6.5C9,6.78,9.22,7,9.5,7h1.81 c0.45,1.12,1.4,2.01,2.6,2.36l2.62,0.73C17.4,10.33,18,11.1,18,12V14z M5,17c-1.66,0-3,1.34-3,3s1.34,3,3,3s3-1.34,3-3 S6.66,17,5,17z M5,21c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1C6,20.55,5.55,21,5,21z M19,17c-1.66,0-3,1.34-3,3 s1.34,3,3,3s3-1.34,3-3S20.66,17,19,17z M19,21c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1C20,20.55,19.55,21,19,21z M12,17c-1.66,0-3,1.34-3,3s1.34,3,3,3s3-1.34,3-3S13.66,17,12,17z M12,21c-0.55,0-1-0.45-1-1c0-0.55,0.45-1,1-1s1,0.45,1,1 C13,20.55,12.55,21,12,21z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
