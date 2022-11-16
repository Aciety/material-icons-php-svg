<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class HeadphonesRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M3,12v7c0,1.1,0.9,2,2,2h2c1.1,0,2-0.9,2-2v-4c0-1.1-0.9-2-2-2H5v-1c0-3.87,3.13-7,7-7s7,3.13,7,7v1h-2c-1.1,0-2,0.9-2,2v4 c0,1.1,0.9,2,2,2h2c1.1,0,2-0.9,2-2v-7c0-4.97-4.03-9-9-9S3,7.03,3,12z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
