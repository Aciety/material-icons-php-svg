<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['approve', 'bubble', 'chat', 'check', 'comment', 'communicate', 'complete', 'done', 'mark', 'message', 'ok', 'read', 'select', 'sent', 'speech', 'tick', 'verified', 'yes'],
)]
final class MarkChatReadTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M19,10c0.34,0,0.67,0.03,1,0.08V4H4v12h8.08C12.57,12.61,15.47,10,19,10z');
        $l1I1->setStyle('opacity', '.3');
        $l0I0->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M17.34,20l-3.54-3.54l1.41-1.41l2.12,2.12l4.24-4.24L23,14.34L17.34,20z M12.08,16H4V4h16v6.08c0.71,0.1,1.38,0.31,2,0.6V4 c0-1.1-0.9-2-2-2H4C2.9,2,2,2.9,2,4v18l4-4h6v0c0-0.14,0.02-0.27,0.03-0.4C12.01,17.4,12,17.2,12,17C12,16.66,12.03,16.33,12.08,16 z');
        $l0I0->addChild($l1I2);
        $doc->addChild($l0I0);
    }
}
