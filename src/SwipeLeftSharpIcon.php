<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SwipeLeftSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M20.18,15.4L19.1,23h-9L5,17.62l1.22-1.23L10,17.24V6.5C10,5.67,10.67,5,11.5,5S13,5.67,13,6.5v6h1.38L20.18,15.4z M12,2.5 c4.74,0,7.67,2.52,8.43,4.5H22c-0.73-2.88-4.51-6-10-6C8.78,1,5.82,2.13,3.5,4.02V2H2v5h5V5.5H4.09C6.21,3.64,8.97,2.5,12,2.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
