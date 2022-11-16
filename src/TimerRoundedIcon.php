<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class TimerRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M10,3h4c0.55,0,1-0.45,1-1c0-0.55-0.45-1-1-1h-4C9.45,1,9,1.45,9,2C9,2.55,9.45,3,10,3z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M19.03,7.39l0.75-0.75c0.38-0.38,0.39-1.01,0-1.4c0,0-0.01-0.01-0.01-0.01c-0.39-0.39-1.01-0.38-1.4,0l-0.75,0.75 C16.07,4.74,14.12,4,12,4c-4.8,0-8.88,3.96-9,8.76C2.87,17.84,6.94,22,12,22c4.98,0,9-4.03,9-9C21,10.88,20.26,8.93,19.03,7.39z M13,13c0,0.55-0.45,1-1,1s-1-0.45-1-1V9c0-0.55,0.45-1,1-1s1,0.45,1,1V13z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
