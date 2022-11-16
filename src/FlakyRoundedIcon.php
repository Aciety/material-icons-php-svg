<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class FlakyRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M12.16,15.72c-0.29-0.29-0.29-0.77,0-1.06l0,0c0.29-0.29,0.77-0.29,1.06,0 l0.82,0.82l1.96-1.96c0.29-0.29,0.77-0.29,1.06,0l0,0c0.29,0.29,0.29,0.77,0,1.06l-2.65,2.65c-0.19,0.19-0.51,0.2-0.7,0 L12.16,15.72z M12,2C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10S17.5,2,12,2z M7.87,6.81l0.88,0.88l0.88-0.88 c0.29-0.29,0.77-0.29,1.06,0l0,0c0.29,0.29,0.29,0.77,0,1.06L9.81,8.75l0.88,0.88c0.29,0.29,0.29,0.77,0,1.06l0,0 c-0.29,0.29-0.77,0.29-1.06,0L8.75,9.81l-0.88,0.88c-0.29,0.29-0.77,0.29-1.06,0l0,0c-0.29-0.29-0.29-0.77,0-1.06l0.88-0.88 L6.81,7.87c-0.29-0.29-0.29-0.77,0-1.06l0,0C7.1,6.51,7.57,6.51,7.87,6.81z M12,20c-2.2,0-4.2-0.9-5.7-2.3L17.7,6.3 C19.1,7.8,20,9.8,20,12C20,16.4,16.4,20,12,20z');
        $l1I0->setStyle('fill-rule', 'evenodd');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
