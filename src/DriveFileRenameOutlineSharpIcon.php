<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class DriveFileRenameOutlineSharpIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[15, 16], [11, 20], [21, 20], [21, 16]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[12.06, 7.19], [3, 16.25], [3, 20], [6.75, 20], [15.81, 10.94]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '14.48', y: '4.08', width: '3.59', height: '5.3');
        $l2I2->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 8.257289e-03 13.4765)');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
