<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['auto', 'disabled', 'edit', 'enabled', 'erase', 'fix', 'magic', 'modify', 'off', 'on', 'slash', 'star', 'stars', 'wand'],
)]
final class AutoFixOffTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGRect(x: '3.99', y: '15.15', width: '7.73', height: '2');
        $l2I0->setAttribute('transform', 'matrix(0.7071 -0.7071 0.7071 0.7071 -9.117 10.2825)');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[20, 7], [20.94, 4.94], [23, 4], [20.94, 3.06], [20, 1], [19.06, 3.06], [17, 4], [19.06, 4.94]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M14.17,8.42l1.41,1.41l-1.46,1.46l1.41,1.41l2.17-2.17c0.39-0.39,0.39-1.02,0-1.41l-2.83-2.83C14.68,6.1,14.43,6,14.17,6 c-0.26,0-0.51,0.1-0.71,0.29l-2.17,2.17l1.41,1.41L14.17,8.42z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M2.81,2.81L1.39,4.22l7.07,7.07l-6.17,6.17c-0.39,0.39-0.39,1.02,0,1.41l2.83,2.83C5.32,21.9,5.57,22,5.83,22 s0.51-0.1,0.71-0.29l6.17-6.17l7.07,7.07l1.41-1.41L2.81,2.81z M5.83,19.59l-1.41-1.41l5.46-5.46l1.41,1.41L5.83,19.59z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
