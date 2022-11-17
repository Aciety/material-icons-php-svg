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
    categories: ['maps'],
    tags: ['buddha', 'buddhism', 'buddhist', 'monastery', 'religion', 'spiritual', 'temple', 'worship'],
)]
final class TempleBuddhistSharpIcon extends SVG
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
        $l3I0 = new SVGPath(d: 'M21,9.02c0,1.09-0.89,1.98-1.98,1.98H4.98C3.89,11,3,10.11,3,9.02H1c0,1.86,1.28,3.4,3,3.84V22h6v-5h4v5h6v-9.14 c0.55-0.14,3-1.04,3-3.86L21,9.02z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M6,8.86V10h12V8.86c0.55-0.14,3-1.04,3-3.86l-2,0.02C19,6.11,18.11,7,17.02,7H6.98C5.89,7,5,6.11,5,5.02H3 C3,6.87,4.28,8.42,6,8.86z');
        $l2I1->addChild($l3I0);
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGGroup();
        $l3I0 = new SVGPolygon(points: [[12, 1], [8.25, 6], [15.75, 6]]);
        $l2I2->addChild($l3I0);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
