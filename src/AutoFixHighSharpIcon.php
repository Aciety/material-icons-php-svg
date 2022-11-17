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
    tags: ['adjust', 'auto', 'edit', 'editing', 'enhance', 'fix', 'high', 'pen', 'stars', 'tool'],
)]
final class AutoFixHighSharpIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[20, 7], [20.94, 4.94], [23, 4], [20.94, 3.06], [20, 1], [19.06, 3.06], [17, 4], [19.06, 4.94]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[8.5, 7], [9.44, 4.94], [11.5, 4], [9.44, 3.06], [8.5, 1], [7.56, 3.06], [5.5, 4], [7.56, 4.94]]);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPolygon(points: [[20, 12.5], [19.06, 14.56], [17, 15.5], [19.06, 16.44], [20, 18.5], [20.94, 16.44], [23, 15.5], [20.94, 14.56]]);
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M18.41,9.83l-4.24-4.24L1.59,18.17l4.24,4.24L18.41,9.83z M14.21,11.21l-1.41-1.41l1.38-1.38l1.41,1.41L14.21,11.21z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
