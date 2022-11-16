<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class PinEndSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M20,12V6H4v12h10l0,2H2V4h20v8H20z M19,14c-1.66,0-3,1.34-3,3s1.34,3,3,3c1.66,0,3-1.34,3-3S20.66,14,19,14z M14.66,8H9 v5.66l2.12-2.12l2.83,2.83l1.41-1.41l-2.83-2.83L14.66,8z');
        $doc->addChild($l0I1);
    }
}