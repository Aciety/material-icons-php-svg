<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class FiberDvrIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M17.5,10.5h2v1h-2V10.5z M4.5,10.5h2v3h-2V10.5z M21,3H3C1.89,3,1,3.89,1,5v14c0,1.1,0.89,2,2,2h18c1.11,0,2-0.9,2-2V5 C23,3.89,22.11,3,21,3z M8,13.5C8,14.35,7.35,15,6.5,15H3V9h3.5C7.35,9,8,9.65,8,10.5V13.5z M12.62,15h-1.5L9.37,9h1.5l1,3.43 l1-3.43h1.5L12.62,15z M21,11.5c0,0.6-0.4,1.15-0.9,1.4L21,15h-1.5l-0.85-2H17.5v2H16V9h3.5c0.85,0,1.5,0.65,1.5,1.5V11.5z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
