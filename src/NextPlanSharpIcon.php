<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class NextPlanSharpIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M12,2C6.48,2,2,6.48,2,12c0,5.52,4.48,10,10,10s10-4.48,10-10C22,6.48,17.52,2,12,2z M18,13.97h-5l2.26-2.26 c-0.91-1.06-2.25-1.74-3.76-1.74c-2.37,0-4.35,1.66-4.86,3.88l-0.96-0.32c0.64-2.62,3-4.56,5.82-4.56c1.78,0,3.37,0.79,4.47,2.03 L18,8.97V13.97z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
