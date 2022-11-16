<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class HomeMaxTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M19,7H5C3.9,7,3,7.9,3,9v5c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V9C21,7.9,20.1,7,19,7z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19,5H5C2.79,5,1,6.79,1,9v5c0,2.21,1.79,4,4,4h2v1h10v-1h2c2.21,0,4-1.79,4-4V9C23,6.79,21.21,5,19,5z M21,14 c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V9c0-1.1,0.9-2,2-2h14c1.1,0,2,0.9,2,2V14z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
