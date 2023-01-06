<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['!', 'alert', 'attention', 'bubbles', 'caution', 'chat', 'communication', 'conversation', 'danger', 'error', 'exclamation', 'failed', 'feedback', 'important', 'mark', 'message', 'notification', 'service', 'sms', 'speech', 'symbol', 'warning'],
)]
final class SmsFailedSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22 2H2v20l4-4h16V2zm-9 12h-2v-2h2v2zm0-4h-2V6h2v4z');
        $doc->addChild($l0I1);
    }
}
