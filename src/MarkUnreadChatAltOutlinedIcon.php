<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['bubble', 'chat', 'circle', 'comment', 'communicate', 'mark', 'message', 'notification', 'speech', 'unread'],
)]
final class MarkUnreadChatAltOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M20,16H4V4h10.1c-0.08-0.39-0.18-1.11,0-2H4C2.9,2,2,2.9,2,4v18l4-4h14c1.1,0,2-0.9,2-2V6.98c-0.58,0.44-1.26,0.77-2,0.92 V16z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '19', cy: '3', r: '3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGRect(x: '6', y: '12', width: '8', height: '2');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGRect(x: '6', y: '9', width: '12', height: '2');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M6,8h12V7.9c-1.21-0.25-2.25-0.95-2.97-1.9H6V8z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
