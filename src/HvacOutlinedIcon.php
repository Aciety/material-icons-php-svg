<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class HvacOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M12,18c3.31,0,6-2.69,6-6s-2.69-6-6-6s-6,2.69-6,6S8.69,18,12,18z M15.44,10c0.26,0.45,0.44,0.96,0.51,1.5h-7.9 c0.07-0.54,0.24-1.05,0.51-1.5H15.44z M15.95,12.5c-0.07,0.54-0.24,1.05-0.51,1.5H8.56c-0.26-0.45-0.44-0.96-0.51-1.5H15.95z M9.38,15h5.24c-0.7,0.61-1.61,1-2.62,1S10.09,15.61,9.38,15z M14.62,9H9.38c0.7-0.61,1.61-1,2.62-1S13.91,8.39,14.62,9z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
