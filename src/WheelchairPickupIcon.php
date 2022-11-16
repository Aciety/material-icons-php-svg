<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class WheelchairPickupIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M4.5,4c0-1.11,0.89-2,2-2s2,0.89,2,2s-0.89,2-2,2S4.5,5.11,4.5,4z M10,10.95V9c0-1.1-0.9-2-2-2H5C3.9,7,3,7.9,3,9v6h2v7 h3.5v-0.11c-1.24-1.26-2-2.99-2-4.89C6.5,14.42,7.91,12.16,10,10.95z M16.5,17c0,1.65-1.35,3-3,3s-3-1.35-3-3 c0-1.11,0.61-2.06,1.5-2.58v-2.16C9.98,12.9,8.5,14.77,8.5,17c0,2.76,2.24,5,5,5s5-2.24,5-5H16.5z M19.54,14H15V8h-2v8h5.46 l2.47,3.71l1.66-1.11L19.54,14z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
