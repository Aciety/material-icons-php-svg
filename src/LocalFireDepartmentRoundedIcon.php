<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class LocalFireDepartmentRoundedIcon extends SVG
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M12,12.9l-2.03,2c-0.46,0.46-0.82,1.03-0.93,1.67C8.74,18.41,10.18,20,12,20s3.26-1.59,2.96-3.42 c-0.11-0.64-0.46-1.22-0.93-1.67L12,12.9z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M15.56,6.55L15.56,6.55C14.38,8.02,12,7.19,12,5.3V3.77c0-0.8-0.89-1.28-1.55-0.84C8.12,4.49,4,7.97,4,13 c0,2.92,1.56,5.47,3.89,6.86c-0.71-1.02-1.06-2.31-0.81-3.68c0.19-1.04,0.75-1.98,1.51-2.72l2.71-2.67c0.39-0.38,1.01-0.38,1.4,0 l2.73,2.69c0.74,0.73,1.3,1.65,1.48,2.68c0.25,1.36-0.07,2.64-0.77,3.66c1.89-1.15,3.29-3.06,3.71-5.3 c0.61-3.27-0.81-6.37-3.22-8.1C16.3,6.17,15.83,6.22,15.56,6.55z');
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
