<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['deliver', 'dispatch', 'envelop', 'extension', 'mail', 'message', 'schedule', 'send', 'time'],
)]
final class SendTimeExtensionIcon extends SvgIcon
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
        $l2I0 = new SVGPath(d: 'M20,6c0-1.1-0.9-2-2-2h-4c0-1.38-1.12-2.5-2.5-2.5S9,2.62,9,4H5.01c-1.1,0-2,0.9-2,2v3.8C5.7,9.8,6,11.96,6,12.5 c0,0.54-0.29,2.7-3,2.7V19c0,1.1,0.9,2,2,2h3.8c0-2.16,1.37-2.78,2.2-2.94v-9.3l9,4.5V6z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPolygon(points: [[13, 12], [13, 16], [17, 17], [13, 18], [13, 22], [23, 17]]);
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
