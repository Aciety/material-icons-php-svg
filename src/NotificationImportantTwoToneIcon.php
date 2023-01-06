<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['alert'],
    tags: ['!', 'active', 'alarm', 'alert', 'attention', 'bell', 'caution', 'chime', 'danger', 'error', 'exclamation', 'important', 'mark', 'notification', 'notifications', 'notify', 'reminder', 'ring', 'sound', 'symbol', 'warning'],
)]
final class NotificationImportantTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M12 6c-2.76 0-5 2.24-5 5v7h10v-7c0-2.76-2.24-5-5-5zm1 10h-2v-2h2v2zm0-4h-2V8h2v4z');
        $l0I0->setStyle('opacity', '.3');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12 23c1.1 0 1.99-.89 1.99-1.99h-3.98c0 1.1.89 1.99 1.99 1.99zm7-6v-6c0-3.35-2.36-6.15-5.5-6.83V3c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v1.17C7.36 4.85 5 7.65 5 11v6l-2 2v1h18v-1l-2-2zm-2 1H7v-7c0-2.76 2.24-5 5-5s5 2.24 5 5v7zM11 8h2v4h-2zm0 6h2v2h-2z');
        $doc->addChild($l0I1);
    }
}
