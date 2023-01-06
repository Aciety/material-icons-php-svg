<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['social'],
    tags: ['export', 'ios', 'send', 'share'],
)]
final class IosShareTwoToneIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M18,8h-3v2h3v11H6V10h3V8H6c-1.11,0-2,0.89-2,2v11c0,1.1,0.89,2,2,2h12c1.1,0,2-0.9,2-2V10C20,8.89,19.1,8,18,8z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[11, 16], [13, 16], [13, 5], [16, 5], [12, 1], [8, 5], [11, 5]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
