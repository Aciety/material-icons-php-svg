<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class MoveUpRoundedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M3.01,13.28c-0.14-2.57,1.66-4.73,4.07-5.18L6.29,8.88c-0.39,0.39-0.39,1.02,0,1.41l0,0c0.39,0.39,1.02,0.39,1.41,0 l2.59-2.59c0.39-0.39,0.39-1.02,0-1.41L7.71,3.7c-0.39-0.39-1.02-0.39-1.41,0l0,0c-0.39,0.39-0.39,1.02,0,1.41l0.88,0.88l0,0.06 c-3.64,0.43-6.43,3.65-6.15,7.47C1.29,17.22,4.55,20,8.26,20H10c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H8.22 C5.52,18,3.15,15.96,3.01,13.28z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M13,15v3c0,1.1,0.9,2,2,2h5c1.1,0,2-0.9,2-2v-3c0-1.1-0.9-2-2-2h-5C13.9,13,13,13.9,13,15z M20,18h-5v-3h5V18z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M20,4h-5c-1.1,0-2,0.9-2,2v3c0,1.1,0.9,2,2,2h5c1.1,0,2-0.9,2-2V6C22,4.9,21.1,4,20,4z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
