<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SpatialAudioOffRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGCircle(cx: '10', cy: '9', r: '4');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M16.39,15.56C14.71,14.7,12.53,14,10,14c-2.53,0-4.71,0.7-6.39,1.56C2.61,16.07,2,17.1,2,18.22L2,19c0,1.1,0.9,2,2,2h12 c1.1,0,2-0.9,2-2l0-0.78C18,17.1,17.39,16.07,16.39,15.56z');
        $l0I1->addChild($l1I1);
        $l1I2 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M21.11,1.85c-0.37-0.48-1.08-0.52-1.5-0.09l0,0c-0.35,0.35-0.39,0.91-0.09,1.3c1.17,1.5,2.64,5.23,0,8.61 c-0.3,0.39-0.26,0.95,0.09,1.3l0,0c0.43,0.43,1.13,0.38,1.5-0.09C22.61,10.95,24.46,6.16,21.11,1.85z');
        $l1I2->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M18.31,4.84c-0.33-0.57-1.11-0.67-1.58-0.21c-0.33,0.33-0.36,0.84-0.13,1.25c0.25,0.44,0.74,1.69-0.01,2.99 c-0.23,0.4-0.19,0.9,0.14,1.22l0,0c0.47,0.47,1.25,0.35,1.58-0.22C19.47,7.88,18.89,5.85,18.31,4.84z');
        $l1I2->addChild($l2I1);
        $l0I1->addChild($l1I2);
        $doc->addChild($l0I1);
    }
}
