<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class WebStoriesIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M17,4c1.1,0,2,0.9,2,2v12c0,1.1-0.9,2-2,2V4z M2,20c0,1.1,0.9,2,2,2h9c1.1,0,2-0.9,2-2V4c0-1.1-0.9-2-2-2H4 C2.9,2,2,2.9,2,4V20z M21,18c0.83,0,1.5-0.67,1.5-1.5v-9C22.5,6.67,21.83,6,21,6V18z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
