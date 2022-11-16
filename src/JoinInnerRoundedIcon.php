<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class JoinInnerRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M12.68,6.8c-0.39-0.35-0.98-0.35-1.37,0C9.35,8.56,9,10.84,9,12c0,1.15,0.35,3.44,2.32,5.2c0.39,0.35,0.98,0.35,1.37,0 C14.65,15.44,15,13.16,15,12C15,10.85,14.65,8.56,12.68,6.8z');
        $l0I1->addChild($l1I0);
        $l1I1 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M9.04,16.87C8.71,16.95,8.36,17,8,17c-2.76,0-5-2.24-5-5s2.24-5,5-5c0.36,0,0.71,0.05,1.04,0.13 c0.39-0.56,0.88-1.12,1.49-1.63C9.75,5.19,8.9,5,8,5c-3.86,0-7,3.14-7,7s3.14,7,7,7c0.9,0,1.75-0.19,2.53-0.5 C9.92,17.99,9.43,17.43,9.04,16.87z');
        $l1I1->addChild($l2I0);
        $l0I1->addChild($l1I1);
        $l1I2 = new SVGPath(d: 'M16,5c-0.9,0-1.75,0.19-2.53,0.5c0.61,0.51,1.1,1.07,1.49,1.63C15.29,7.05,15.64,7,16,7c2.76,0,5,2.24,5,5s-2.24,5-5,5 c-0.36,0-0.71-0.05-1.04-0.13c-0.39,0.56-0.88,1.12-1.49,1.63C14.25,18.81,15.1,19,16,19c3.86,0,7-3.14,7-7S19.86,5,16,5z');
        $l0I1->addChild($l1I2);
        $doc->addChild($l0I1);
    }
}
