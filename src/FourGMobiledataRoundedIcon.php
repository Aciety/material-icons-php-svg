<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class FourGMobiledataRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M8,7L8,7C7.45,7,7,7.45,7,8v4H5V8c0-0.55-0.45-1-1-1h0C3.45,7,3,7.45,3,8v5c0,0.55,0.45,1,1,1h3v2c0,0.55,0.45,1,1,1h0 c0.55,0,1-0.45,1-1v-2h1c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H9V8C9,7.45,8.55,7,8,7z M17,12L17,12c0,0.55,0.45,1,1,1h1v2h-5V9 h6c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h-6c-1.1,0-2,0.9-2,2v6c0,1.1,0.9,2,2,2h5c1.1,0,2-0.9,2-2v-3c0-0.55-0.45-1-1-1h-2 C17.45,11,17,11.45,17,12z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
