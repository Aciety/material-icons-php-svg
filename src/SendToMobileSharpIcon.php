<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['Android', 'OS', 'arrow', 'device', 'export', 'forward', 'hardware', 'iOS', 'mobile', 'phone', 'right', 'send', 'share', 'tablet', 'to'],
)]
final class SendToMobileSharpIcon extends SVG
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
        $l2I0 = new SVGPolygon(points: [[17, 18], [7, 18], [7, 6], [17, 6], [17, 7], [19, 7], [19, 1], [5, 1], [5, 23], [19, 23], [19, 17], [17, 17]]);
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[22, 12], [18, 8], [18, 11], [13, 11], [13, 13], [18, 13], [18, 16]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
