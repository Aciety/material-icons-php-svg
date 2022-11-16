<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class DatasetLinkedRoundedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M8.09,17H7v-4h3.69c0.95-0.63,2.09-1,3.31-1h6c0.34,0,0.67,0.04,1,0.09V5c0-1.1-0.9-2-2-2H5C3.9,3,3,3.9,3,5v14 c0,1.1,0.9,2,2,2h3.81C8.3,20.12,8,19.09,8,18C8,17.66,8.04,17.33,8.09,17z M13,7h4v4h-4V7z M7,7h4v4H7V7z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12.03,17.66c0.16-0.98,1.09-1.66,2.08-1.66L15,16c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1l-0.83,0 c-2.09,0-3.95,1.53-4.15,3.61C9.79,19.99,11.66,22,14,22h1c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h-1 C12.79,20,11.82,18.91,12.03,17.66z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M19.83,14L19,14c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1l0.89,0c1,0,1.92,0.68,2.08,1.66C22.18,18.91,21.21,20,20,20h-1 c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h1c2.34,0,4.21-2.01,3.98-4.39C23.78,15.53,21.92,14,19.83,14z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M15,19h4c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h-4c-0.55,0-1,0.45-1,1v0C14,18.55,14.45,19,15,19z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
