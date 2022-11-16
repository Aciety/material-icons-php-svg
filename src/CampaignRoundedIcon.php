<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class CampaignRoundedIcon extends SVG
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
        $l0I1 = new SVGPath(d: 'M18,12L18,12c0,0.55,0.45,1,1,1h2c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h-2C18.45,11,18,11.45,18,12z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M16.59,16.82c-0.33,0.44-0.24,1.05,0.2,1.37c0.53,0.39,1.09,0.81,1.62,1.21c0.44,0.33,1.06,0.24,1.38-0.2 c0-0.01,0.01-0.01,0.01-0.02c0.33-0.44,0.24-1.06-0.2-1.38c-0.53-0.4-1.09-0.82-1.61-1.21c-0.44-0.33-1.06-0.23-1.39,0.21 C16.6,16.81,16.59,16.82,16.59,16.82z');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M19.81,4.81c0-0.01-0.01-0.01-0.01-0.02c-0.33-0.44-0.95-0.53-1.38-0.2c-0.53,0.4-1.1,0.82-1.62,1.22 c-0.44,0.33-0.52,0.95-0.19,1.38c0,0.01,0.01,0.01,0.01,0.02c0.33,0.44,0.94,0.53,1.38,0.2c0.53-0.39,1.09-0.82,1.62-1.22 C20.05,5.87,20.13,5.25,19.81,4.81z');
        $doc->addChild($l0I3);
        $l0I4 = new SVGPath(d: 'M8,9H4c-1.1,0-2,0.9-2,2v2c0,1.1,0.9,2,2,2h1v3c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-3h1l5,3V6L8,9z');
        $doc->addChild($l0I4);
        $l0I5 = new SVGPath(d: 'M15.5,12c0-1.33-0.58-2.53-1.5-3.35v6.69C14.92,14.53,15.5,13.33,15.5,12z');
        $doc->addChild($l0I5);
    }
}
