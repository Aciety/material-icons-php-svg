<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['search'],
    tags: ['bed', 'bedroom', 'child', 'children', 'furniture', 'home', 'hotel', 'house', 'kid', 'night', 'pillows', 'rest', 'room', 'size', 'sleep', 'twin', 'young'],
)]
final class BedroomChildOutlinedIcon extends SvgIcon
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
        $l1I0 = new SVGPath(d: 'M20,4v16H4V4H20 M20,2H4C2.9,2,2,2.9,2,4v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M16.5,10.67V9 c0-1.1-0.9-2-2-2h-5c-1.1,0-2,0.9-2,2v1.67c-0.88,0.35-1.5,1.2-1.5,2.2V17h1.5v-1.5h9V17H18v-4.13C18,11.87,17.38,11.02,16.5,10.67 z M15,8.5v2H9v-2H15z M7.5,12.87C7.5,12.39,7.89,12,8.37,12h7.27c0.48,0,0.87,0.39,0.87,0.87V14h-9v-1.13H7.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
