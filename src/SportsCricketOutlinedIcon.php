<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['athlete', 'athletic', 'ball', 'bat', 'cricket', 'entertainment', 'exercise', 'game', 'hobby', 'social', 'sports'],
)]
final class SportsCricketOutlinedIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M15.04,12.79l-8.5-8.5C6.35,4.1,6.09,4,5.83,4S5.32,4.1,5.13,4.29L2.29,7.13c-0.39,0.39-0.39,1.03,0,1.42l8.5,8.5 c0.2,0.2,0.45,0.29,0.71,0.29c0.26,0,0.51-0.1,0.71-0.29l2.83-2.83C15.43,13.82,15.43,13.18,15.04,12.79z M11.5,14.92L4.41,7.83 l1.42-1.42l7.09,7.09L11.5,14.92z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGRect(x: '16.17', y: '16.17', width: '2', height: '6');
        $l2I1->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -8.5264 17.7562)');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M18.5,2C16.57,2,15,3.57,15,5.5C15,7.43,16.57,9,18.5,9S22,7.43,22,5.5C22,3.57,20.43,2,18.5,2z M18.5,7 C17.67,7,17,6.33,17,5.5S17.67,4,18.5,4S20,4.67,20,5.5S19.33,7,18.5,7z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
