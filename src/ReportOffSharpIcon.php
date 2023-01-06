<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['content'],
    tags: ['!', 'alert', 'attention', 'caution', 'danger', 'disabled', 'enabled', 'error', 'exclamation', 'important', 'mark', 'notification', 'octagon', 'off', 'offline', 'on', 'report', 'slash', 'symbol', 'warning'],
)]
final class ReportOffSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M11 7h2v2.33l7.2 7.2.8-.8V8.27L15.73 3H8.27l-.8.8L11 7.33zM2.41 1.58L1 2.99l3.64 3.64L3 8.27v7.46L8.27 21h7.46l1.64-1.64L21.01 23l1.41-1.41L2.41 1.58zM11 12.99l.01.01H11v-.01zm1 4.31c-.72 0-1.3-.58-1.3-1.3 0-.72.58-1.3 1.3-1.3s1.3.58 1.3 1.3c0 .72-.58 1.3-1.3 1.3z');
        $doc->addChild($l0I1);
    }
}
