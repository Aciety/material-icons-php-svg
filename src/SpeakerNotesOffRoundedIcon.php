<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['bubble', 'chat', 'comment', 'communicate', 'disabled', 'enabled', 'format', 'list', 'message', 'notes', 'off', 'on', 'slash', 'speaker', 'speech', 'text'],
)]
final class SpeakerNotesOffRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M1.91 2.36c-.35-.35-.92-.35-1.27 0s-.35.92 0 1.27l1.38 1.38L2 22l4-4h9l5.09 5.09c.35.35.92.35 1.27 0s.35-.92 0-1.27L1.91 2.36zM7 14c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm0-3c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm13-9H4.08l7 7H17c.55 0 1 .45 1 1s-.45 1-1 1h-3.92l6.99 6.99C21.14 17.95 22 17.08 22 16V4c0-1.1-.9-2-2-2zm-3 6h-6c-.55 0-1-.45-1-1s.45-1 1-1h6c.55 0 1 .45 1 1s-.45 1-1 1z');
        $doc->addChild($l0I1);
    }
}
