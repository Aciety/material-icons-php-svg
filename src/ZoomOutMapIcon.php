<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ZoomOutMapIcon extends SVG
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
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M15,3l2.3,2.3l-2.89,2.87l1.42,1.42L18.7,6.7L21,9V3H15z M3,9l2.3-2.3l2.87,2.89l1.42-1.42L6.7,5.3L9,3H3V9z M9,21 l-2.3-2.3l2.89-2.87l-1.42-1.42L5.3,17.3L3,15v6H9z M21,15l-2.3,2.3l-2.87-2.89l-1.42,1.42l2.89,2.87L15,21h6V15z');
        $l2I0->addChild($l3I0);
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}