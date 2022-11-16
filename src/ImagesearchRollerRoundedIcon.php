<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ImagesearchRollerRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M20,3v4c0,0.55-0.45,1-1,1H7C6.45,8,6,7.55,6,7V6H4v4h8c1.1,0,2,0.9,2,2v3h1c0.55,0,1,0.45,1,1v6c0,0.55-0.45,1-1,1h-4 c-0.55,0-1-0.45-1-1v-6c0-0.55,0.45-1,1-1h1v-3H4c-1.1,0-2-0.9-2-2V6c0-1.1,0.9-2,2-2h2V3c0-0.55,0.45-1,1-1h12 C19.55,2,20,2.45,20,3z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}