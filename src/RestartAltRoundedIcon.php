<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class RestartAltRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M12,5V3.21c0-0.45-0.54-0.67-0.85-0.35L8.35,5.65c-0.2,0.2-0.2,0.51,0,0.71l2.79,2.79C11.46,9.46,12,9.24,12,8.79V7 c3.31,0,6,2.69,6,6c0,2.72-1.83,5.02-4.31,5.75C13.27,18.87,13,19.27,13,19.7v0c0,0.65,0.62,1.16,1.25,0.97 C17.57,19.7,20,16.64,20,13C20,8.58,16.42,5,12,5z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M6,13c0-1.34,0.44-2.58,1.19-3.59c0.3-0.4,0.26-0.95-0.09-1.31l0,0C6.68,7.68,5.96,7.72,5.6,8.2C4.6,9.54,4,11.2,4,13 c0,3.64,2.43,6.7,5.75,7.67C10.38,20.86,11,20.35,11,19.7v0c0-0.43-0.27-0.83-0.69-0.95C7.83,18.02,6,15.72,6,13z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
