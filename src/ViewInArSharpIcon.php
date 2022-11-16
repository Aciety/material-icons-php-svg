<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ViewInArSharpIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[18, 1], [18, 3], [21, 3], [21, 6], [23, 6], [23, 1]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[21, 21], [18, 21], [18, 23], [23, 23], [23, 18], [21, 18]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[3, 3], [6, 3], [6, 1], [1, 1], [1, 6], [3, 6]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[3, 18], [1, 18], [1, 23], [6, 23], [6, 21], [3, 21]]);
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M19,7.97l-7-4.03L5,7.97v8.06l7,4.03l7-4.03V7.97z M11,17.17l-4-2.3v-4.63l4,2.33V17.17z M12,10.84L8.04,8.53L12,6.25 l3.96,2.28L12,10.84z M17,14.87l-4,2.3v-4.6l4-2.33V14.87z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
