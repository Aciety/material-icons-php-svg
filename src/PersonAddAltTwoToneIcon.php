<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['+', 'account', 'add', 'face', 'human', 'people', 'person', 'plus', 'profile', 'user'],
)]
final class PersonAddAltTwoToneIcon extends SVG
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
        $l2I0 = new SVGCircle(cx: '9', cy: '8', r: '2');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M14.48,16.34C13.29,15.73,11.37,15,9,15c-2.37,0-4.29,0.73-5.48,1.34C3.2,16.5,3,16.84,3,17.22V18h12v-0.78 C15,16.84,14.8,16.5,14.48,16.34z');
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M9,12c2.21,0,4-1.79,4-4c0-2.21-1.79-4-4-4S5,5.79,5,8C5,10.21,6.79,12,9,12z M9,6c1.1,0,2,0.9,2,2c0,1.1-0.9,2-2,2 S7,9.1,7,8C7,6.9,7.9,6,9,6z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPolygon(points: [[20, 9], [20, 6], [18, 6], [18, 9], [15, 9], [15, 11], [18, 11], [18, 14], [20, 14], [20, 11], [23, 11], [23, 9]]);
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M15.39,14.56C13.71,13.7,11.53,13,9,13c-2.53,0-4.71,0.7-6.39,1.56C1.61,15.07,1,16.1,1,17.22V20h16v-2.78 C17,16.1,16.39,15.07,15.39,14.56z M15,18H3v-0.78c0-0.38,0.2-0.72,0.52-0.88C4.71,15.73,6.63,15,9,15c2.37,0,4.29,0.73,5.48,1.34 C14.8,16.5,15,16.84,15,17.22V18z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
