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
    categories: ['av'],
    tags: ['control', 'fast', 'forward', 'media', 'music', 'play', 'speed', 'time', 'tv', 'video'],
)]
final class FastForwardTwoToneIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I2->setStyle('fill', 'none');
        $l0I0->addChild($l1I2);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPolygon(points: [[15, 9.859999999999999], [15, 14.14], [18.03, 12]]);
        $l2I0->setStyle('opacity', '.3');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[6, 9.859999999999999], [6, 14.14], [9.029999999999999, 12]]);
        $l2I1->setStyle('opacity', '.3');
        $l1I1->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M4,18l8.5-6L4,6V18z M6,9.86L9.03,12L6,14.14V9.86z');
        $l1I1->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M21.5,12L13,6v12L21.5,12z M15,9.86L18.03,12L15,14.14V9.86z');
        $l1I1->addChild($l2I3);
        $l0I1->addChild($l1I1);
        $doc->addChild($l0I1);
    }
}
