<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['!', 'alert', 'attention', 'bubbles', 'caution', 'chat', 'communication', 'conversation', 'danger', 'error', 'exclamation', 'failed', 'feedback', 'important', 'mark', 'message', 'notification', 'service', 'sms', 'speech', 'symbol', 'warning'],
)]
final class SmsFailedTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M4 17.17L5.17 16H20V4H4v13.17zM11 6h2v4h-2V6zm0 6h2v2h-2v-2z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm0 14H5.17L4 17.17V4h16v12zm-9-4h2v2h-2zm0-6h2v4h-2z');
        $doc->addChild($l0I2);
    }
}
