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
    categories: ['device'],
    tags: ['bright', 'fluorescent', 'lamp', 'light', 'lightbulb'],
)]
final class FluorescentOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M5,15h14V9H5V15z M7,11h10v2H7V11z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '11', y: '2', width: '2', height: '3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '17.62', y: '5.2', width: '2.54', height: '2');
        $l2I2->setAttribute('transform', 'matrix(0.7046 -0.7096 0.7096 0.7046 1.1814 15.2381)');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '11', y: '19', width: '2', height: '3');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPolygon(points: [[17.29, 17.71], [19.08, 19.51], [20.5, 18.09], [18.7, 16.3]]);
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGRect(x: '4.1', y: '4.93', width: '1.99', height: '2.53');
        $l2I5->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -2.8904 5.4222)');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGRect(x: '3.83', y: '16.89', width: '2.54', height: '2');
        $l2I6->setAttribute('transform', 'matrix(0.7096 -0.7046 0.7046 0.7096 -11.1263 8.7897)');
        $l1I0->addChild($l2I6);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
