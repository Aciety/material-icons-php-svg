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
    tags: ['alternative', 'artificial', 'communication', 'satellite', 'space', 'space station', 'television'],
)]
final class SatelliteAltOutlinedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M21,14l2,0c0,4.97-4.03,9-9,9l0-2C17.87,21,21,17.87,21,14z M14,17l0,2c2.76,0,5-2.24,5-5l-2,0C17,15.66,15.66,17,14,17z M18.26,0.59l3.54,3.54c0.78,0.78,0.78,2.05,0,2.83l-3.18,3.18c-0.78,0.78-2.05,0.78-2.83,0l-1.24-1.24L13.84,9.6l1.24,1.24 c0.78,0.78,0.78,2.05,0,2.83l-1.41,1.41c-0.78,0.78-2.05,0.78-2.83,0L9.6,13.84l-0.71,0.71l1.24,1.24c0.78,0.78,0.78,2.05,0,2.83 L6.95,21.8c-0.78,0.78-2.05,0.78-2.83,0l-3.54-3.54c-0.78-0.78-0.78-2.05,0-2.83l3.18-3.18c0.78-0.78,2.05-0.78,2.83,0l1.24,1.24 l0.71-0.71L7.3,11.55c-0.78-0.78-0.78-2.05,0-2.83L8.72,7.3c0.78-0.78,2.05-0.78,2.83,0l1.24,1.24l0.71-0.71L12.25,6.6 c-0.78-0.78-0.78-2.05,0-2.83l3.18-3.18C16.22-0.2,17.48-0.2,18.26,0.59z M3.06,15.79L2,16.85l3.54,3.54l1.06-1.06L3.06,15.79z M5.18,13.67l-1.06,1.06l3.54,3.54l1.06-1.06L5.18,13.67z M10.13,8.72l-1.41,1.41l3.54,3.54l1.41-1.41L10.13,8.72z M14.73,4.12 l-1.06,1.06l3.54,3.54l1.06-1.06L14.73,4.12z M16.85,2l-1.06,1.06l3.54,3.54l1.06-1.06L16.85,2z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
