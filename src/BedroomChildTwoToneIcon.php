<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['search'],
    tags: ['bed', 'bedroom', 'child', 'children', 'furniture', 'home', 'hotel', 'house', 'kid', 'night', 'pillows', 'rest', 'room', 'size', 'sleep', 'twin', 'young'],
)]
final class BedroomChildTwoToneIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M4,20h16V4H4V20z M6,12.87c0-1,0.62-1.85,1.5-2.2V9c0-1.1,0.9-2,2-2h5c1.1,0,2,0.9,2,2v1.67 c0.88,0.35,1.5,1.2,1.5,2.2V17h-1.5v-1.5h-9V17H6V12.87z');
        $l1I0->setStyle('opacity', '.3');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M20,2H4C2.9,2,2,2.9,2,4v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M20,20H4V4h16V20z');
        $l0I1->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M7.5,15.5h9V17H18v-4.13c0-1-0.62-1.85-1.5-2.2V9c0-1.1-0.9-2-2-2h-5c-1.1,0-2,0.9-2,2v1.67c-0.88,0.35-1.5,1.2-1.5,2.2V17 h1.5V15.5z M9,8.5h6v2H9V8.5z M8.37,12h7.27c0.48,0,0.87,0.39,0.87,0.87V14h-9v-1.13H7.5C7.5,12.39,7.89,12,8.37,12z');
        $l0I1->addChild($l1I2);
        $doc->addChild($l0I1);
    }
}
