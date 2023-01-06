<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['call', 'cell', 'contact', 'device', 'hardware', 'lock', 'locked', 'mobile', 'password', 'phone', 'privacy', 'private', 'protection', 'safety', 'secure', 'security', 'telephone'],
)]
final class PhoneLockedSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M20,5V4c0-1.1-0.9-2-2-2s-2,0.9-2,2v1h-1v5h6V5H20z M19,5h-2V4c0-0.55,0.45-1,1-1s1,0.45,1,1V5z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M21,15l-5-1l-2.9,2.9c-2.5-1.43-4.57-3.5-6-6L10,8L9,3L3,3c0,3.28,0.89,6.35,2.43,9c1.58,2.73,3.85,4.99,6.57,6.57 c2.65,1.53,5.72,2.43,9,2.43L21,15z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
