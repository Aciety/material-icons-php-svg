<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['search'],
    tags: ['bed', 'bedroom', 'child', 'children', 'furniture', 'home', 'hotel', 'house', 'kid', 'night', 'pillows', 'rest', 'room', 'size', 'sleep', 'twin', 'young'],
)]
final class BedroomChildIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGRect(x: '9', y: '8.5', width: '6', height: '2');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M15.64,12H8.37c-0.48,0-0.87,0.39-0.87,0.87h0.01V14h9v-1.13C16.51,12.39,16.12,12,15.64,12z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20,2H4C2.9,2,2,2.9,2,4v16c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2z M18,17h-1.5v-1.5h-9V17H6v-4.13 c0-1,0.62-1.85,1.5-2.2V9c0-1.1,0.9-2,2-2h5c1.1,0,2,0.9,2,2v1.67c0.88,0.35,1.5,1.2,1.5,2.2V17z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
