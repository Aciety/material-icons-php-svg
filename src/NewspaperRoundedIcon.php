<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class NewspaperRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M21.15,3.85l-0.82,0.82l-0.95-0.96c-0.39-0.39-1.02-0.39-1.42,0L17,4.67l-0.96-0.96c-0.39-0.39-1.03-0.39-1.42,0 l-0.95,0.96l-0.96-0.96c-0.39-0.39-1.02-0.39-1.41,0l-0.96,0.96L9.38,3.71c-0.39-0.39-1.02-0.39-1.42,0L7,4.67L6.04,3.71 c-0.39-0.39-1.03-0.39-1.42,0L3.67,4.67L2.85,3.85C2.54,3.54,2,3.76,2,4.21V19c0,1.1,0.9,2,2,2l16,0c1.1,0,2-0.9,2-2V4.21 C22,3.76,21.46,3.54,21.15,3.85z M11,19H4v-6h7V19z M20,19h-7v-2h7V19z M20,15h-7v-2h7V15z M20,11H4V8h16V11z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
