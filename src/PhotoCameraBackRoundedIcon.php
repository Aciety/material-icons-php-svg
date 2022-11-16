<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class PhotoCameraBackRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M20,5h-3.17l-1.24-1.35C15.22,3.24,14.68,3,14.12,3H9.88C9.32,3,8.78,3.24,8.41,3.65L7.17,5H4C2.9,5,2,5.9,2,7v12 c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V7C22,5.9,21.1,5,20,5z M17,17H7c-0.41,0-0.65-0.47-0.4-0.8l2-2.67c0.2-0.27,0.6-0.27,0.8,0 L11.25,16l2.6-3.47c0.2-0.27,0.6-0.27,0.8,0l2.75,3.67C17.65,16.53,17.41,17,17,17z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
