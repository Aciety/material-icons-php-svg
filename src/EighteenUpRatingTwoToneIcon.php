<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: [],
)]
final class EighteenUpRatingTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGRect(x: '13', y: '10', width: '1.5', height: '1.5');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '13', y: '12.5', width: '1.5', height: '1.5');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M5,19h14V5H5V19z M11.5,10c0-0.55,0.45-1,1-1H15c0.55,0,1,0.45,1,1v4c0,0.55-0.45,1-1,1h-2.5 c-0.55,0-1-0.45-1-1V10z M7,9h3v6H8.5v-4.5H7V9z');
        $l2I2->setStyle('opacity', '.3');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[8.5, 15], [10, 15], [10, 9], [7, 9], [7, 10.5], [8.5, 10.5]]);
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M12.5,15H15c0.55,0,1-0.45,1-1v-4c0-0.55-0.45-1-1-1h-2.5c-0.55,0-1,0.45-1,1v4C11.5,14.55,11.95,15,12.5,15z M13,10h1.5 v1.5H13V10z M13,12.5h1.5V14H13V12.5z');
        $l1I0->addChild($l2I5);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
