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
final class BedroomChildSharpIcon extends SVG
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
        $l2I1 = new SVGRect(x: '7.51', y: '12', width: '9', height: '2');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M22,2H2v20h20V2z M18,17h-1.5v-1.5h-9V17H6l0-6.32l1.5-0.01V7h9v3.67l1.5,0V17z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
