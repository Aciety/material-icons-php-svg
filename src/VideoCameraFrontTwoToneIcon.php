<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class VideoCameraFrontTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M18,10.48V6c0-1.1-0.9-2-2-2H4C2.9,4,2,4.9,2,6v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-4.48l4,3.98v-11L18,10.48z M16,18 H4V6h12V18z M10,12c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2S8.9,12,10,12z M14,15.43c0-0.81-0.48-1.53-1.22-1.85 C11.93,13.21,10.99,13,10,13c-0.99,0-1.93,0.21-2.78,0.58C6.48,13.9,6,14.62,6,15.43V16h8V15.43z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M4,18h12V9.69V6H4V18z M10,8c1.1,0,2,0.9,2,2s-0.9,2-2,2s-2-0.9-2-2S8.9,8,10,8z M6,15.43 c0-0.81,0.48-1.53,1.22-1.85C8.07,13.21,9.01,13,10,13c0.99,0,1.93,0.21,2.78,0.58C13.52,13.9,14,14.62,14,15.43V16H6V15.43z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
