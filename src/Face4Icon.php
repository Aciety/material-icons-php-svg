<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class Face4Icon extends SVG
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
        $l2I0 = new SVGPath(d: 'M12,2c-0.96,0-1.88,0.14-2.75,0.39C8.37,0.96,6.8,0,5,0C2.24,0,0,2.24,0,5c0,1.8,0.96,3.37,2.39,4.25 C2.14,10.12,2,11.04,2,12c0,5.52,4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8c0-0.05,0.01-0.1,0.01-0.15 c2.6-0.98,4.68-2.99,5.74-5.55C11.58,8.56,14.37,10,17.5,10c0.75,0,1.47-0.09,2.17-0.24C19.88,10.47,20,11.22,20,12 C20,16.41,16.41,20,12,20z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '9', cy: '13', r: '1.25');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '15', cy: '13', r: '1.25');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
