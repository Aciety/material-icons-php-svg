<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class HPlusMobiledataRoundedIcon extends SVG
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
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M12,11H6V8c0-0.55-0.45-1-1-1h0C4.45,7,4,7.45,4,8v8c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-3h6v3c0,0.55,0.45,1,1,1h0 c0.55,0,1-0.45,1-1V8c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1V11z M21,11h-1v-1c0-0.55-0.45-1-1-1h0c-0.55,0-1,0.45-1,1v1h-1 c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h1v1c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-1h1c0.55,0,1-0.45,1-1v0 C22,11.45,21.55,11,21,11z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
