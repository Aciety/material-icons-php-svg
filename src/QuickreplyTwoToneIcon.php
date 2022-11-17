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
    categories: ['action'],
    tags: ['bolt', 'bubble', 'chat', 'comment', 'communicate', 'fast', 'lightning', 'message', 'quick', 'quickreply', 'reply', 'speech', 'thunderbolt'],
)]
final class QuickreplyTwoToneIcon extends SVG
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
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGGroup();
        $l4I0 = new SVGPolygon(points: [[4, 4], [4, 17.17], [5.17, 16], [15, 16], [15, 10], [20, 10], [20, 4]]);
        $l3I0->addChild($l4I0);
        $l3I0->setStyle('opacity', '.3');
        $l2I0->addChild($l3I0);
        $l3I1 = new SVGPath(d: 'M5.17,16L4,17.17V4h16v6h2V4c0-1.1-0.9-2-2-2H4C2.9,2,2.01,2.9,2.01,4L2,22l4-4h9v-2H5.17z');
        $l2I0->addChild($l3I1);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[19, 23], [22.5, 16], [20.3, 16], [22, 12], [17, 12], [17, 18], [19, 18]]);
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
