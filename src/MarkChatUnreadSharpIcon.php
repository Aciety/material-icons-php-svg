<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class MarkChatUnreadSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M22,6.98V18H6l-4,4V2h12.1C14.04,2.32,14,2.66,14,3c0,2.76,2.24,5,5,5C20.13,8,21.16,7.61,22,6.98z M16,3 c0,1.66,1.34,3,3,3s3-1.34,3-3s-1.34-3-3-3S16,1.34,16,3z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
