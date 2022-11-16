<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SegmentRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M10,18h10c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H10c-0.55,0-1,0.45-1,1v0C9,17.55,9.45,18,10,18z M3,7L3,7 c0,0.55,0.45,1,1,1h16c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H4C3.45,6,3,6.45,3,7z M10,13h10c0.55,0,1-0.45,1-1v0 c0-0.55-0.45-1-1-1H10c-0.55,0-1,0.45-1,1v0C9,12.55,9.45,13,10,13z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
