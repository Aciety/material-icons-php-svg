<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class PlumbingSharpIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M16.16,5.64l3.54,3.54c1.17-1.17,1.17-3.07,0-4.24l-3.54-3.54l-4.24,4.24l2.12,2.12L16.16,5.64z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '5.17', y: '10.5', width: '5', height: '3');
        $l2I1->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -6.2383 8.9393)');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M15.45,7.76l-1.41,1.41L9.79,4.93L7.67,7.05l4.24,4.24l-8.49,8.49l2.83,2.83L16.86,12l0.71,0.71l1.41-1.41L15.45,7.76z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
