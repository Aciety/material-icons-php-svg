<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['deliver', 'envelop', 'letter', 'mail', 'mailbox', 'markunread', 'post', 'postal', 'postbox', 'receive', 'send', 'unread'],
)]
final class MarkunreadMailboxSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22 6H10v6H8V4h6V0H6v6H2v16h20V6z');
        $doc->addChild($l0I1);
    }
}
