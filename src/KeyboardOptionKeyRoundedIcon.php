<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class KeyboardOptionKeyRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M15,6L15,6c0,0.55,0.45,1,1,1h4c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h-4C15.45,5,15,5.45,15,6z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M9.58,6C9.22,5.38,8.56,5,7.85,5H4C3.45,5,3,5.45,3,6v0c0,0.55,0.45,1,1,1h3.85l6.35,11c0.36,0.62,1.02,1,1.73,1H20 c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1h-4.07L9.58,6z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
