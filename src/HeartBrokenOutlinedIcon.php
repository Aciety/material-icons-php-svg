<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class HeartBrokenOutlinedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M16.5,3c-0.96,0-1.9,0.25-2.73,0.69L12,9h3l-3,10l1-9h-3l1.54-5.39C10.47,3.61,9.01,3,7.5,3C4.42,3,2,5.42,2,8.5 c0,4.13,4.16,7.18,10,12.5c5.47-4.94,10-8.26,10-12.5C22,5.42,19.58,3,16.5,3z M10.24,16.73C6.45,13.34,4,11,4,8.5 C4,6.54,5.54,5,7.5,5c0.59,0,1.19,0.15,1.73,0.42L7.35,12h3.42L10.24,16.73z M15.13,15.53L17.69,7h-2.91l0.61-1.82 C15.75,5.06,16.13,5,16.5,5C18.46,5,20,6.54,20,8.5C20,10.71,17.98,12.93,15.13,15.53z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
