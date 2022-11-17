<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['alert'],
    tags: ['auto', 'bin', 'can', 'clock', 'date', 'delete', 'garbage', 'remove', 'schedule', 'time', 'trash'],
)]
final class AutoDeleteIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[15, 2], [11.5, 2], [10.5, 1], [5.5, 1], [4.5, 2], [1, 2], [1, 4], [15, 4]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M16,9c-0.7,0-1.37,0.1-2,0.29V5H2v12c0,1.1,0.9,2,2,2h5.68c1.12,2.36,3.53,4,6.32,4c3.87,0,7-3.13,7-7 C23,12.13,19.87,9,16,9z M16,21c-2.76,0-5-2.24-5-5s2.24-5,5-5s5,2.24,5,5S18.76,21,16,21z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[16.5, 12], [15, 12], [15, 17], [18.6, 19.1], [19.4, 17.9], [16.5, 16.2]]);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
