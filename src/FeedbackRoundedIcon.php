<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['!', 'alert', 'announcement', 'attention', 'bubble', 'caution', 'chat', 'comment', 'communicate', 'danger', 'error', 'exclamation', 'feedback', 'important', 'mark', 'message', 'notification', 'speech', 'symbol', 'warning'],
)]
final class FeedbackRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20 2H4.01c-1.1 0-2 .9-2 2v18L6 18h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 12h-2v-2h2v2zm0-5c0 .55-.45 1-1 1s-1-.45-1-1V7c0-.55.45-1 1-1s1 .45 1 1v2z');
        $doc->addChild($l0I1);
    }
}
