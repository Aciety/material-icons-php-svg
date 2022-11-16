<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class AddHomeWorkRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M14.96,11.7c-0.09-0.52-0.36-0.99-0.8-1.3l-5-3.57c-0.7-0.5-1.63-0.5-2.32,0l-5,3.57C1.31,10.78,1,11.38,1,12.03V19 c0,1.1,0.9,2,2,2h3v-6h4v6h1.68C11.25,20.09,11,19.08,11,18C11,15.22,12.62,12.83,14.96,11.7z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M23,13.11V4.97C23,3.88,22.12,3,21.03,3h-9.06C10.88,3,10,3.88,10,4.97l0.02,0.05c0.1,0.06,0.21,0.11,0.3,0.18l5,3.57 c0.79,0.56,1.34,1.4,1.56,2.32C17.25,11.04,17.62,11,18,11C19.96,11,21.73,11.81,23,13.11z M17,7h2v2h-2V7z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M23,18c0-2.76-2.24-5-5-5s-5,2.24-5,5s2.24,5,5,5S23,20.76,23,18z M17.5,21v-2.5H15v-1h2.5V15h1v2.5H21v1h-2.5V21H17.5z');
        $l2I2->addChild($l3I0);
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
