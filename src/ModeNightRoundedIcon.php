<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ModeNightRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M11.93,2.3C9.89,1.8,7.91,1.95,6.16,2.58C5.44,2.84,5.25,3.8,5.85,4.29C8.08,6.12,9.5,8.89,9.5,12 c0,3.11-1.42,5.88-3.65,7.71c-0.59,0.49-0.42,1.45,0.31,1.7C7.2,21.79,8.33,22,9.5,22c6.05,0,10.85-5.38,9.87-11.6 C18.76,6.48,15.78,3.24,11.93,2.3z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
