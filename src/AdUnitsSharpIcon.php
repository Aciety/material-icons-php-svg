<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class AdUnitsSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: '0', y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M19,1H5v22h14V1z M17,19H7V5h10V19z');
        $l1I1->addChild($l2I0);
        $l2I1 = new SVGRect(x: '8', y: '6', width: '8', height: '2');
        $l1I1->addChild($l2I1);
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
