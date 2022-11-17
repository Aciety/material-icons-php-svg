<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['cold', 'crisis', 'diaster', 'severe', 'snow', 'snowflake', 'weather'],
)]
final class SevereColdOutlinedIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[12, 10.41], [16, 6.41], [14.59, 5], [12, 7.59], [12, 4], [10, 4], [10, 7.59], [7.41, 5], [6, 6.41], [10, 10.41], [10, 12], [8.41, 12], [4.41, 8], [3, 9.41], [5.59, 12], [2, 12], [2, 14], [5.59, 14], [3, 16.59], [4.41, 18], [8.41, 14], [10, 14], [10, 15.59], [6, 19.59], [7.41, 21], [10, 18.41], [10, 22], [12, 22], [12, 18.41], [14.59, 21], [16, 19.59], [12, 15.59], [12, 14], [13.59, 14], [17.59, 18], [19, 16.59], [16.41, 14], [20, 14], [20, 12], [12, 12]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '19', y: '2', width: '2', height: '5');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '19', y: '8', width: '2', height: '2');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
