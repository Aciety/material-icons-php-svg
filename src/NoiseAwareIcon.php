<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class NoiseAwareIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M16,15h-2c0,0.55-0.45,1-1,1c-0.43,0-0.81-0.27-0.95-0.68c-0.15-0.44-0.4-1.08-0.93-1.61l-1.36-1.36 C9.28,11.87,9,11.19,9,10.5C9,9.12,10.12,8,11.5,8c1.21,0,2.22,0.86,2.45,2h2.02c-0.25-2.25-2.16-4-4.47-4C9.02,6,7,8.02,7,10.5 c0,1.22,0.49,2.41,1.35,3.27l1.36,1.36c0.17,0.17,0.31,0.44,0.44,0.82C10.56,17.17,11.71,18,13,18C14.65,18,16,16.65,16,15z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '13.5', cy: '12.5', r: '1.5');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M3.6,6.58l1.58,1.26c0.35-0.57,0.77-1.1,1.24-1.57L4.85,5.02C4.38,5.49,3.97,6.02,3.6,6.58z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M9.46,4.42L8.59,2.61c-0.63,0.23-1.24,0.52-1.8,0.87l0.87,1.81C8.22,4.93,8.82,4.64,9.46,4.42z');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M4.49,9.26L2.53,8.81c-0.21,0.63-0.36,1.28-0.44,1.95l1.96,0.45C4.11,10.53,4.27,9.88,4.49,9.26z');
        $l1I0->addChild($l2I4);
        $l2I5 = new SVGPath(d: 'M20.4,6.58c-0.36-0.56-0.78-1.09-1.25-1.56l-1.58,1.26c0.48,0.47,0.89,0.99,1.24,1.57L20.4,6.58z');
        $l1I0->addChild($l2I5);
        $l2I6 = new SVGPath(d: 'M4.04,12.79l-1.96,0.45c0.08,0.67,0.23,1.33,0.44,1.95l1.97-0.45C4.27,14.12,4.11,13.47,4.04,12.79z');
        $l1I0->addChild($l2I6);
        $l2I7 = new SVGPath(d: 'M17.21,3.48c-0.57-0.35-1.17-0.64-1.8-0.87l-0.87,1.81c0.64,0.22,1.24,0.51,1.8,0.87L17.21,3.48z');
        $l1I0->addChild($l2I7);
        $l2I8 = new SVGPath(d: 'M13,4.07V2.05C12.67,2.02,12.34,2,12,2s-0.67,0.02-1,0.05v2.02C11.33,4.03,11.66,4,12,4S12.67,4.03,13,4.07z');
        $l1I0->addChild($l2I8);
        $l2I9 = new SVGPath(d: 'M11,19.93v2.02c0.33,0.03,0.66,0.05,1,0.05s0.67-0.02,1-0.05v-2.02C12.67,19.97,12.34,20,12,20S11.33,19.97,11,19.93z');
        $l1I0->addChild($l2I9);
        $l2I10 = new SVGPath(d: 'M19.51,14.74l1.97,0.45c0.21-0.63,0.36-1.28,0.44-1.95l-1.96-0.45C19.89,13.47,19.73,14.12,19.51,14.74z');
        $l1I0->addChild($l2I10);
        $l2I11 = new SVGPath(d: 'M19.96,11.21l1.96-0.45c-0.08-0.67-0.23-1.33-0.44-1.95l-1.97,0.45C19.73,9.88,19.89,10.53,19.96,11.21z');
        $l1I0->addChild($l2I11);
        $l2I12 = new SVGPath(d: 'M17.58,17.73l1.58,1.26c0.47-0.48,0.88-1,1.25-1.56l-1.58-1.26C18.47,16.73,18.05,17.26,17.58,17.73z');
        $l1I0->addChild($l2I12);
        $l2I13 = new SVGPath(d: 'M6.79,20.52c0.57,0.35,1.17,0.64,1.8,0.87l0.87-1.81c-0.64-0.22-1.24-0.51-1.8-0.87L6.79,20.52z');
        $l1I0->addChild($l2I13);
        $l2I14 = new SVGPath(d: 'M14.54,19.58l0.87,1.81c0.63-0.23,1.24-0.52,1.8-0.87l-0.87-1.81C15.78,19.07,15.18,19.36,14.54,19.58z');
        $l1I0->addChild($l2I14);
        $l2I15 = new SVGPath(d: 'M3.6,17.42c0.36,0.56,0.78,1.09,1.25,1.56l1.58-1.26c-0.48-0.47-0.89-0.99-1.24-1.57L3.6,17.42z');
        $l1I0->addChild($l2I15);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
