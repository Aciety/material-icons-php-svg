<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class PivotTableChartTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M21,5c0-1.1-0.9-2-2-2h-9v5h11V5z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M3,19c0,1.1,0.9,2,2,2h3V10H3V19z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M3,5v3h5V3H5C3.9,3,3,3.9,3,5z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M18,9l-4,4h3v2c0,1.1-0.9,2-2,2h-2v-3l-4,4l4,4v-3h2c2.21,0,4-1.79,4-4v-2h3L18,9z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
