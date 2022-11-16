<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class NoCellOutlinedIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M17,6v8.17l2,2V3c0-1.1-0.9-1.99-2-1.99L7,1C6.15,1,5.42,1.55,5.13,2.3L8.83,6H17z M7,3h10v1H7V3z M21.19,21.19L19,19l-2-2 L7,7L5,5L2.81,2.81L1.39,4.22L5,7.83V21c0,1.1,0.9,2,2,2h10c0.85,0,1.58-0.55,1.87-1.3l0.91,0.91L21.19,21.19z M17,21H7v-1h10V21z M7,18V9.83L15.17,18H7z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
