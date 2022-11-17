<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['accounts', 'committee', 'face', 'family', 'friends', 'humans', 'network', 'people', 'persons', 'profiles', 'social', 'team', 'users'],
)]
final class PeopleAltTwoToneIcon extends SVG
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
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGCircle(cx: '9', cy: '8', r: '2');
        $l2I0->setStyle('opacity', '.3');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M9,15c-2.7,0-5.8,1.29-6,2.01L3,18h12v-1C14.8,16.29,11.7,15,9,15z');
        $l2I1->setStyle('opacity', '.3');
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M16.67,13.13C18.04,14.06,19,15.32,19,17v3h4v-3C23,14.82,19.43,13.53,16.67,13.13z');
        $l1I1->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M15,12c2.21,0,4-1.79,4-4c0-2.21-1.79-4-4-4c-0.47,0-0.91,0.1-1.33,0.24C14.5,5.27,15,6.58,15,8s-0.5,2.73-1.33,3.76 C14.09,11.9,14.53,12,15,12z');
        $l1I1->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M9,12c2.21,0,4-1.79,4-4c0-2.21-1.79-4-4-4S5,5.79,5,8C5,10.21,6.79,12,9,12z M9,6c1.1,0,2,0.9,2,2c0,1.1-0.9,2-2,2 S7,9.1,7,8C7,6.9,7.9,6,9,6z');
        $l1I1->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M9,13c-2.67,0-8,1.34-8,4v3h16v-3C17,14.34,11.67,13,9,13z M15,18H3l0-0.99C3.2,16.29,6.3,15,9,15s5.8,1.29,6,2V18z');
        $l1I1->addChild($l2I5);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
