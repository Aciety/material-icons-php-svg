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
    categories: ['content'],
    tags: ['+', '-', '=', 'calculate', 'count', 'finance calculator', 'math'],
)]
final class CalculateTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M5,19h14V5H5V19z M13.03,7.06L14.09,6l1.41,1.41L16.91,6l1.06,1.06l-1.41,1.41l1.41,1.41l-1.06,1.06 L15.5,9.54l-1.41,1.41l-1.06-1.06l1.41-1.41L13.03,7.06z M13,13.25h5v1.5h-5V13.25z M13,15.75h5v1.5h-5V15.75z M6.25,7.72h5v1.5 h-5V7.72z M6,14.5h2v-2h1.5v2h2V16h-2v2H8v-2H6V14.5z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '6.25', y: '7.72', width: '5', height: '1.5');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '13', y: '15.75', width: '5', height: '1.5');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGRect(x: '13', y: '13.25', width: '5', height: '1.5');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPolygon(points: [[8, 18], [9.5, 18], [9.5, 16], [11.5, 16], [11.5, 14.5], [9.5, 14.5], [9.5, 12.5], [8, 12.5], [8, 14.5], [6, 14.5], [6, 16], [8, 16]]);
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPolygon(points: [[14.09, 10.95], [15.5, 9.539999999999999], [16.91, 10.95], [17.97, 9.890000000000001], [16.56, 8.470000000000001], [17.97, 7.06], [16.91, 6], [15.5, 7.41], [14.09, 6], [13.03, 7.06], [14.44, 8.470000000000001], [13.03, 9.890000000000001]]);
        $l1I0->addChild($l2I6);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
