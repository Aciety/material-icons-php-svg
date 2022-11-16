<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SmartScreenRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M21,5H3C1.9,5,1,5.9,1,7v10c0,1.1,0.9,2,2,2h18c1.1,0,2-0.9,2-2V7C23,5.9,22.1,5,21,5z M18,7v10H6V7H18z M14,12 c0-0.41-0.34-0.75-0.75-0.75S12.5,11.59,12.5,12s0.34,0.75,0.75,0.75S14,12.41,14,12z M9,12c0-0.41-0.34-0.75-0.75-0.75 S7.5,11.59,7.5,12s0.34,0.75,0.75,0.75S9,12.41,9,12z M16.5,12c0-0.41-0.34-0.75-0.75-0.75S15,11.59,15,12s0.34,0.75,0.75,0.75 S16.5,12.41,16.5,12z M11.5,12c0-0.41-0.34-0.75-0.75-0.75S10,11.59,10,12s0.34,0.75,0.75,0.75S11.5,12.41,11.5,12z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}