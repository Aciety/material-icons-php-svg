<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SwitchAccountTwoToneIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M8,15.73C9.47,14.06,11.6,13,14,13s4.53,1.06,6,2.73V4H8V15.73z M14,5 c1.66,0,3,1.34,3,3c0,1.66-1.34,3-3,3s-3-1.34-3-3C11,6.34,12.34,5,14,5z');
        $l2I0->setStyle('enable-background', 'new');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M4,6H2v14c0,1.1,0.9,2,2,2h14v-2H4V6z M14,11c1.66,0,3-1.34,3-3c0-1.66-1.34-3-3-3s-3,1.34-3,3C11,9.66,12.34,11,14,11z M14,7c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1S13.45,7,14,7z M20,2H8C6.9,2,6,2.9,6,4v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2 V4C22,2.9,21.1,2,20,2z M10.69,16c0.95-0.63,2.09-1,3.31-1s2.36,0.37,3.31,1H10.69z M20,15.73C18.53,14.06,16.4,13,14,13 s-4.53,1.06-6,2.73V4h12V15.73z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
