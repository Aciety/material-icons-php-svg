<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['search'],
    tags: ['bed', 'bedroom', 'double', 'full', 'furniture', 'home', 'hotel', 'house', 'king', 'night', 'parent', 'pillows', 'queen', 'rest', 'room', 'sizem master', 'sleep'],
)]
final class BedroomParentIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M16.5,12h-9c-0.55,0-1,0.45-1,1v1h11v-1C17.5,12.45,17.05,12,16.5,12z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '7.25', y: '8.5', width: '4', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '12.75', y: '8.5', width: '4', height: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M20,2H4C2.9,2,2,2.9,2,4v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M19,17h-1.5v-1.5h-11V17H5v-3.83 c0-0.66,0.25-1.26,0.65-1.72V9c0-1.1,0.9-2,2-2H11c0.37,0,0.72,0.12,1,0.32C12.28,7.12,12.63,7,13,7h3.35c1.1,0,2,0.9,2,2v2.45 c0.4,0.46,0.65,1.06,0.65,1.72V17z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
