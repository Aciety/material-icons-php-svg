<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class LivingSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[15.5, 12], [15.5, 14.5], [8.5, 14.5], [8.5, 12], [7.52, 12], [6.5, 12], [6.5, 16.5], [17.5, 16.5], [17.5, 12]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[10, 10], [10, 13], [14, 13], [14, 10], [16.25, 9.99], [16.25, 7.5], [7.75, 7.5], [7.75, 9.99]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M22,2H2v20h20V2z M19,9.99V18H5v-8l1.25-0.01V6h11.5v3.99H19z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
