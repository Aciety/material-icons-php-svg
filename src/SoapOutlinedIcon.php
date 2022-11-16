<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SoapOutlinedIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M14.25,6C14.66,6,15,6.34,15,6.75S14.66,7.5,14.25,7.5S13.5,7.16,13.5,6.75S13.84,6,14.25,6 M14.25,4.5 C13.01,4.5,12,5.51,12,6.75S13.01,9,14.25,9s2.25-1.01,2.25-2.25S15.49,4.5,14.25,4.5L14.25,4.5z M20,5.5c0.28,0,0.5,0.22,0.5,0.5 S20.28,6.5,20,6.5S19.5,6.28,19.5,6S19.72,5.5,20,5.5 M20,4c-1.1,0-2,0.9-2,2s0.9,2,2,2s2-0.9,2-2S21.1,4,20,4L20,4z M16.5,1 C15.67,1,15,1.67,15,2.5S15.67,4,16.5,4C17.33,4,18,3.33,18,2.5S17.33,1,16.5,1z M20.75,16c0.69,0,1.25-0.56,1.25-1.25 s-0.56-1.25-1.25-1.25H12v-1h6.75c0.69,0,1.25-0.56,1.25-1.25c0-0.67-0.53-1.2-1.18-1.24L8.87,10l1.48-2.6 c0.09-0.17,0.14-0.34,0.14-0.54c0-0.26-0.09-0.5-0.26-0.7L9.12,5l-7.18,6.8C1.34,12.36,1,13.15,1,13.97V20c0,1.66,1.34,3,3,3h13.75 c0.69,0,1.25-0.56,1.25-1.25s-0.56-1.25-1.25-1.25H12v-1h7.75c0.69,0,1.25-0.56,1.25-1.25S20.44,17,19.75,17H12v-1H20.75z M10,21H4 c-0.55,0-1-0.45-1-1v-6c0-0.39,0.23-0.64,0.36-0.75L7,9.87V12l3,0V21z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}