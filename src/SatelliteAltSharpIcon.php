<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SatelliteAltSharpIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M15.44,0.59l-3.18,3.18c-0.78,0.78-0.78,2.05,0,2.83l1.24,1.24l-0.71,0.71l-2.65-2.65l-4.24,4.24l2.65,2.65l-0.71,0.71 L6.6,12.25c-0.78-0.78-2.05-0.78-2.83,0l-3.18,3.18c-0.78,0.78-0.78,2.05,0,2.83l3.54,3.54c0.78,0.78,2.05,0.78,2.83,0l3.18-3.18 c0.78-0.78,0.78-2.05,0-2.83l-1.24-1.24l0.71-0.71l2.65,2.65l4.24-4.24L13.84,9.6l0.71-0.71l1.24,1.24c0.78,0.78,2.05,0.78,2.83,0 l3.18-3.18c0.78-0.78,0.78-2.05,0-2.83l-3.54-3.54C17.48-0.2,16.22-0.2,15.44,0.59z M6.6,19.32l-1.06,1.06L2,16.85l1.06-1.06 L6.6,19.32z M8.72,17.2l-1.06,1.06l-3.54-3.54l1.06-1.06L8.72,17.2z M18.26,7.66L17.2,8.72l-3.54-3.54l1.06-1.06L18.26,7.66z M20.38,5.54L19.32,6.6l-3.54-3.54L16.85,2L20.38,5.54z M21,14l2,0c0,4.97-4.03,9-9,9l0-2C17.87,21,21,17.87,21,14z M17,14l2,0 c0,2.76-2.24,5-5,5l0-2C15.66,17,17,15.66,17,14z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
