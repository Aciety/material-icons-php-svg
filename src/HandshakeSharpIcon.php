<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['social'],
    tags: ['agreement', 'hand', 'hands', 'partnership', 'shake'],
)]
final class HandshakeSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M10.59,5.95l-7.05,7.04L0.7,10.3l8.55-8.55l7.95,7.95l-1.42,1.42L10.59,5.95z M23.24,10.24l-8.49-8.49l-2.06,2.06l5.9,5.88 l-2.83,2.83l-5.17-5.17l-6.27,6.27l1.42,1.41l5.32-5.32l0.71,0.71l-5.32,5.32l1.42,1.41l5.32-5.32l0.71,0.71l-5.32,5.32l1.41,1.41 l5.32-5.32l0.71,0.71L10.68,20l1.41,1.41L23.24,10.24z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
