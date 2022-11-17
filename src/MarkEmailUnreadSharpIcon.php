<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['check', 'circle', 'email', 'envelop', 'letter', 'mail', 'mark', 'message', 'note', 'notification', 'send', 'unread'],
)]
final class MarkEmailUnreadSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M22,8.98V20H2V4h12.1C14.04,4.32,14,4.66,14,5c0,1.48,0.65,2.79,1.67,3.71L12,11L4,6v2l8,5l5.3-3.32 C17.84,9.88,18.4,10,19,10C20.13,10,21.16,9.61,22,8.98z M16,5c0,1.66,1.34,3,3,3s3-1.34,3-3s-1.34-3-3-3S16,3.34,16,5z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
