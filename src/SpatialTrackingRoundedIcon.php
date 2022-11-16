<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class SpatialTrackingRoundedIcon extends SVG
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
        $l2I0 = new SVGCircle(cx: '10', cy: '9', r: '4');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M16.39,15.56C14.71,14.7,12.53,14,10,14c-2.53,0-4.71,0.7-6.39,1.56C2.61,16.07,2,17.1,2,18.22V21h16v-2.78 C18,17.1,17.39,16.07,16.39,15.56z');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M19.39,1.76L19.39,1.76c-0.43-0.43-1.14-0.39-1.51,0.09c-1.5,1.93-3.35,6.72,0,11.03c0.37,0.48,1.08,0.52,1.5,0.09l0,0 c0.35-0.35,0.39-0.91,0.09-1.3c-1.17-1.5-2.64-5.23,0-8.61C19.78,2.67,19.74,2.11,19.39,1.76z');
        $l1I0->addChild($l2I2);
        $l2I3 = new SVGPath(d: 'M22.4,5.86c0.23-0.4,0.19-0.9-0.14-1.22l0,0C21.79,4.16,21,4.27,20.67,4.85c-1.15,2-0.57,4.03,0.01,5.04 c0.33,0.57,1.11,0.67,1.58,0.21c0.33-0.33,0.36-0.84,0.13-1.25C22.14,8.41,21.65,7.16,22.4,5.86z');
        $l1I0->addChild($l2I3);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
