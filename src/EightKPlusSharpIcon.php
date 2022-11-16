<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class EightKPlusSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M7.5,12.5h1V14h-1V12.5z M7.5,10h1v1.5h-1V10z M21,3H3v18h18V3z M10,14c0,0.55-0.45,1-1,1H7c-0.55,0-1-0.45-1-1v-4 c0-0.55,0.45-1,1-1h2c0.55,0,1,0.45,1,1V14z M16,15h-1.75l-1.75-2.25V15H11V9h1.5v2.25L14.25,9H16l-2.25,3L16,15z M19,12.5h-1.5V14 h-1v-1.5H15v-1h1.5V10h1v1.5H19V12.5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
