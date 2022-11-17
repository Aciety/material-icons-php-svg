<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['bubble', 'chat', 'comment', 'comments', 'communicate', 'disabled', 'enabled', 'feedback', 'message', 'off', 'offline', 'on', 'slash', 'speech'],
)]
final class CommentsDisabledIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16.83,14H18v-2h-3.17l-1-1H18V9h-6.17l-1-1H18V6H8.83l-4-4H20c1.1,0,2,0.9,2,2v15.17L16.83,14z M2.1,2.1L0.69,3.51L2,4.83 V16c0,1.1,0.9,2,2,2h11.17l5.31,5.31l1.41-1.41L2.1,2.1z M6,9h0.17l2,2H6V9z M6,14v-2h3.17l2,2H6z');
        $doc->addChild($l0I1);
    }
}
