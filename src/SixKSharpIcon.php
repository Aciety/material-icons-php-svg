<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SixKSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M8,12.5h1.5V14H8V12.5z M21,3H3v18h18V3z M11,10.5H8v1h3V15H6.5V9H11V10.5z M18,15h-1.75l-1.75-2.25V15H13V9h1.5v2.25 L16.25,9H18l-2.25,3L18,15z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
