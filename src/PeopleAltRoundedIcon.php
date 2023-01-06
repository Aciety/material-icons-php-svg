<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['accounts', 'committee', 'face', 'family', 'friends', 'humans', 'network', 'people', 'persons', 'profiles', 'social', 'team', 'users'],
)]
final class PeopleAltRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M16.67,13.13C18.04,14.06,19,15.32,19,17v3h3c0.55,0,1-0.45,1-1v-2 C23,14.82,19.43,13.53,16.67,13.13z');
        $l3I0->setStyle('fill-rule', 'evenodd');
        $l2I0->addChild($l3I0);
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGCircle(cx: '9', cy: '8', r: '4');
        $l3I0->setStyle('fill-rule', 'evenodd');
        $l2I1->addChild($l3I0);
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M15,12c2.21,0,4-1.79,4-4c0-2.21-1.79-4-4-4c-0.47,0-0.91,0.1-1.33,0.24 C14.5,5.27,15,6.58,15,8s-0.5,2.73-1.33,3.76C14.09,11.9,14.53,12,15,12z');
        $l3I0->setStyle('fill-rule', 'evenodd');
        $l2I2->addChild($l3I0);
        $l1I1->addChild($l2I2);
        $l2I3 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M9,13c-2.67,0-8,1.34-8,4v2c0,0.55,0.45,1,1,1h14c0.55,0,1-0.45,1-1v-2 C17,14.34,11.67,13,9,13z');
        $l3I0->setStyle('fill-rule', 'evenodd');
        $l2I3->addChild($l3I0);
        $l1I1->addChild($l2I3);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
