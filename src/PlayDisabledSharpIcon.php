<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['av'],
    tags: ['control', 'controls', 'disabled', 'enabled', 'media', 'music', 'off', 'on', 'play', 'slash', 'video'],
)]
final class PlayDisabledSharpIcon extends SvgIcon
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
        $l2I0 = new SVGPolygon(points: [[16.45, 13.62], [19, 12], [8, 5], [8, 5.17]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[2.81, 2.81], [1.39, 4.22], [8, 10.83], [8, 19], [12.99, 15.82], [19.78, 22.61], [21.19, 21.19]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
