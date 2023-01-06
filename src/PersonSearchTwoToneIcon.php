<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['account', 'avatar', 'face', 'find', 'glass', 'human', 'look', 'magnify', 'magnifying', 'people', 'person', 'profile', 'search', 'user'],
)]
final class PersonSearchTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M4,18c0.22-0.72,3.31-2,6-2c0-0.7,0.13-1.37,0.35-1.99C7.62,13.91,2,15.27,2,18v2h9.54c-0.52-0.58-0.93-1.25-1.19-2H4z');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGPath(d: 'M10,13c2.21,0,4-1.79,4-4c0-2.21-1.79-4-4-4C7.79,5,6,6.79,6,9C6,11.21,7.79,13,10,13z M10,7c1.1,0,2,0.89,2,2 c0,1.1-0.9,2-2,2s-2-0.9-2-2C8,7.89,8.9,7,10,7z');
        $l2I0->addChild($l3I1);
        $l3I2 = new SVGGroup();
        $l4I0 = new SVGPath(d: 'M10.35,18c0,0-0.35-0.79-0.35-2c-2.69,0-5.77,1.28-6,2H10.35z');
        $l3I2->addChild($l4I0);
        $l3I2->setStyle('opacity', '.3');
        $l2I0->addChild($l3I2);
        $l3I3 = new SVGPath(d: 'M19.43,18.02C19.79,17.43,20,16.74,20,16c0-2.21-1.79-4-4-4s-4,1.79-4,4c0,2.21,1.79,4,4,4c0.74,0,1.43-0.22,2.02-0.57 c0.93,0.93,1.62,1.62,2.57,2.57L22,20.59C20.5,19.09,21.21,19.79,19.43,18.02z M16,18c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2 s2,0.9,2,2C18,17.1,17.1,18,16,18z');
        $l2I0->addChild($l3I3);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGCircle(cx: '10', cy: '9', r: '2');
        $l2I1->addChild($l3I0);
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
