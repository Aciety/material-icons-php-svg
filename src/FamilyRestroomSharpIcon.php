<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class FamilyRestroomSharpIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M16,4c0-1.11,0.89-2,2-2s2,0.89,2,2s-0.89,2-2,2S16,5.11,16,4z M20,22v-6h2.5l-3-9l-3,0l-1.17,3.5H17V22H20z M12.5,11.5 c0.83,0,1.5-0.67,1.5-1.5s-0.67-1.5-1.5-1.5S11,9.17,11,10S11.67,11.5,12.5,11.5z M5.5,6c1.11,0,2-0.89,2-2s-0.89-2-2-2 s-2,0.89-2,2S4.39,6,5.5,6z M7.5,22v-7H9V7H2v8h1.5v7H7.5z M14,22v-4h1v-5.5h-5V18h1v4H14z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
