<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class GasMeterOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M16,4h-1V2h-2v2h-2V2H9v2H8C5.79,4,4,5.79,4,8v10c0,2.21,1.79,4,4,4h8c2.21,0,4-1.79,4-4V8C20,5.79,18.21,4,16,4z M18,18 c0,1.1-0.9,2-2,2H8c-1.1,0-2-0.9-2-2V8c0-1.1,0.9-2,2-2h8c1.1,0,2,0.9,2,2V18z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M9.5,15.54C9.5,16.9,10.62,18,12,18s2.5-1.1,2.5-2.46c0-1.09-0.45-1.41-2.5-3.79C9.93,14.15,9.5,14.46,9.5,15.54z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '8', y: '8', width: '8', height: '2');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
