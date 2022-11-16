<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class DiningSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M22,2H2v20h20V2z M11,10.3c0,0.93-0.64,1.71-1.5,1.93V19H8v-6.77c-0.86-0.22-1.5-1-1.5-1.93V6H7h0.5v3h0.75V6h0.5h0.5v3H10 V6h0.5H11V10.3z M15.58,12.59l-0.08,0.03V19H14v-6.38l-0.08-0.04c-0.97-0.47-1.67-1.7-1.67-3.18c0-1.88,1.13-3.4,2.5-3.4 c1.38,0,2.5,1.53,2.5,3.41C17.25,10.89,16.55,12.12,15.58,12.59z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
