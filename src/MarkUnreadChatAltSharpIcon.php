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
final class MarkUnreadChatAltSharpIcon extends SVG
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
        $l2I0 = new SVGCircle(cx: '19', cy: '3', r: '3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M6,8V6h9.03c-1.21-1.6-1.08-3.21-0.92-4H2.01L2,22l4-4h16V6.97C21.16,7.61,20.13,8,19,8H6z M14,14H6v-2h8V14z M18,11H6V9 h12V11z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
