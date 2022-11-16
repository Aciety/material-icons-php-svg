<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class EditLocationAltRoundedIcon extends SVG
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M13.54,13H10c-0.55,0-1-0.45-1-1V8.46C9,8.2,9.11,7.94,9.29,7.76l5.32-5.32C13.78,2.16,12.9,2,12,2c-4.2,0-8,3.22-8,8.2 c0,3.18,2.44,6.92,7.33,11.22c0.38,0.33,0.96,0.33,1.34,0C17.56,17.12,20,13.37,20,10.2c0-1.01-0.16-1.94-0.45-2.8l-5.31,5.31 C14.06,12.89,13.8,13,13.54,13z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[11, 11], [13.12, 11], [19.28, 4.84], [17.16, 2.72], [11, 8.880000000000001]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20.71,2L20,1.29c-0.39-0.39-1.02-0.39-1.41,0l-0.72,0.72l2.12,2.12l0.72-0.72C21.1,3.02,21.1,2.39,20.71,2z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
