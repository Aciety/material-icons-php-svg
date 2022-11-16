<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class LogoDevOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M7.68,14.98H6V9h1.71 c1.28,0,1.71,1.03,1.71,1.71l0,2.56C9.42,13.95,9,14.98,7.68,14.98z M12.38,11.46v1.07h-1.18v1.39h1.93v1.07h-2.25 c-0.4,0.01-0.74-0.31-0.75-0.71V9.75c-0.01-0.4,0.31-0.74,0.71-0.75h2.28l0,1.07h-1.92v1.39H12.38z M16.88,14.23 c-0.48,1.11-1.33,0.89-1.71,0L13.77,9h1.18l1.07,4.11L17.09,9h1.18L16.88,14.23z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M7.77,10.12H7.14v3.77h0.63c0.14,0,0.28-0.05,0.42-0.16c0.14-0.1,0.21-0.26,0.21-0.47v-2.52c0-0.21-0.07-0.37-0.21-0.47 C8.05,10.17,7.91,10.12,7.77,10.12z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
