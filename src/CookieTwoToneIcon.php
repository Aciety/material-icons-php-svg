<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class CookieTwoToneIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M17.07,8.93c-2.55-0.39-4.57-2.41-4.99-4.94C6.73,3.82,4,8.69,4,12c0,4.41,3.59,8,8,8 c4.06,0,7.7-3.14,7.98-7.45C17.59,11.48,17.14,9.29,17.07,8.93z M8.5,15C7.67,15,7,14.33,7,13.5S7.67,12,8.5,12s1.5,0.67,1.5,1.5 S9.33,15,8.5,15z M10.5,10C9.67,10,9,9.33,9,8.5S9.67,7,10.5,7S12,7.67,12,8.5S11.33,10,10.5,10z M15,16c-0.55,0-1-0.45-1-1 c0-0.55,0.45-1,1-1s1,0.45,1,1C16,15.55,15.55,16,15,16z');
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGCircle(cx: '10.5', cy: '8.5', r: '1.5');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGCircle(cx: '8.5', cy: '13.5', r: '1.5');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGCircle(cx: '15', cy: '15', r: '1');
        $l1I0->addChild($l2I3);
        $l2I4 = new SVGPath(d: 'M21.95,10.99c-1.79-0.03-3.7-1.95-2.68-4.22c-2.97,1-5.78-1.59-5.19-4.56C7.1,0.74,2,6.41,2,12c0,5.52,4.48,10,10,10 C17.89,22,22.54,16.92,21.95,10.99z M12,20c-4.41,0-8-3.59-8-8c0-3.31,2.73-8.18,8.08-8.02c0.42,2.54,2.44,4.56,4.99,4.94 c0.07,0.36,0.52,2.55,2.92,3.63C19.7,16.86,16.06,20,12,20z');
        $l1I0->addChild($l2I4);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
