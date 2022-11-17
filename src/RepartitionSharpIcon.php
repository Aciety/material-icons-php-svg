<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrow', 'arrows', 'data', 'partition', 'refresh', 'renew', 'repartition', 'restore', 'table'],
)]
final class RepartitionSharpIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M3,21h18v-6H3V21z M10.33,19v-2h3.33v2H10.33z M19,19h-3.33v-2H19V19z M5,17h3.33v2H5V17z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M6,10l1.42-1.42L5.83,7H17c1.1,0,2,0.9,2,2s-0.9,2-2,2H3v2h14c2.21,0,4-1.79,4-4s-1.79-4-4-4H5.83l1.59-1.59L6,2L2,6L6,10 z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
