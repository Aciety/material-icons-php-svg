<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class BentoRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M16,11V5h4c1.1,0,2,0.9,2,2v4H16z M20,19c1.1,0,2-0.9,2-2v-4h-6v6H20z M14,5v14H4c-1.1,0-2-0.9-2-2V7c0-1.1,0.9-2,2-2H14z M9.5,12c0-0.83-0.67-1.5-1.5-1.5S6.5,11.17,6.5,12s0.67,1.5,1.5,1.5S9.5,12.83,9.5,12z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
