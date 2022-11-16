<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class RocketLaunchRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M9.19,6.35c-2.04,2.29-3.44,5.58-3.57,5.89l-2.26-0.97c-0.65-0.28-0.81-1.13-0.31-1.63l3.01-3.01 c0.47-0.47,1.15-0.68,1.81-0.55L9.19,6.35L9.19,6.35z M10.68,16.51c0.3,0.3,0.74,0.38,1.12,0.2c1.16-0.54,3.65-1.81,5.26-3.42 c4.59-4.59,4.63-8.33,4.36-9.93c-0.07-0.4-0.39-0.72-0.79-0.79c-1.6-0.27-5.34-0.23-9.93,4.36c-1.61,1.61-2.87,4.1-3.42,5.26 c-0.18,0.38-0.09,0.83,0.2,1.12L10.68,16.51z M17.65,14.81c-2.29,2.04-5.58,3.44-5.89,3.57l0.97,2.26 c0.28,0.65,1.13,0.81,1.63,0.31l3.01-3.01c0.47-0.47,0.68-1.15,0.55-1.81L17.65,14.81L17.65,14.81z M8.94,17.41 c0.2,1.06-0.15,2.04-0.82,2.71c-0.77,0.77-3.16,1.34-4.71,1.64c-0.69,0.13-1.3-0.48-1.17-1.17c0.3-1.55,0.86-3.94,1.64-4.71 c0.67-0.67,1.65-1.02,2.71-0.82C7.76,15.28,8.72,16.24,8.94,17.41z M13,9c0-1.1,0.9-2,2-2s2,0.9,2,2s-0.9,2-2,2S13,10.1,13,9z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
