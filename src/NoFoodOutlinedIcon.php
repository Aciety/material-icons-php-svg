<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class NoFoodOutlinedIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M1,21h15.01v0.98c0,0.56-0.45,1.01-1.01,1.01H2.01C1.45,22.99,1,22.54,1,21.98V21z M20.49,23.31L16,18.83V19H1v-2h13.17 l-2-2H1c0-3.24,2.46-5.17,5.38-5.79l-5.7-5.7L2.1,2.1L13,13l2,2l6.9,6.9L20.49,23.31z M10.17,13l-2-2c-1.42,0.06-3.52,0.56-4.55,2 H10.17z M23,5h-5V1h-2v4h-5l0.23,2h9.56l-1,9.97l1.83,1.83L23,5z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
