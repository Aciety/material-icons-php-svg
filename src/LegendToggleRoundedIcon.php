<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class LegendToggleRoundedIcon extends SVG
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
        $l1I1 = new SVGPath(d: 'M19,15H5c-0.55,0-1-0.45-1-1v0c0-0.55,0.45-1,1-1h14c0.55,0,1,0.45,1,1v0C20,14.55,19.55,15,19,15z M19,17H5 c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h14c0.55,0,1-0.45,1-1v0C20,17.45,19.55,17,19,17z M15,11l4.58-3.25 C19.84,7.56,20,7.26,20,6.94v0c0-0.81-0.92-1.29-1.58-0.82L15,8.55L10,5L4.48,8.36C4.18,8.55,4,8.87,4,9.22v0 c0,0.78,0.85,1.26,1.52,0.85l4.4-2.68L15,11z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
