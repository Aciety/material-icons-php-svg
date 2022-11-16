<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class DryCleaningRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M19.56,11.36L13,8.44V7c0-0.55-0.45-1-1-1s-1-0.45-1-1s0.45-1,1-1c0.38,0,0.72,0.22,0.88,0.53C13.04,4.84,13.39,5,13.73,5 c0.74,0,1.26-0.79,0.91-1.44c-0.6-1.1-1.86-1.78-3.24-1.51c-1.17,0.23-2.12,1.2-2.34,2.37C8.77,5.98,9.67,7.35,11,7.82v0.63 l-6.56,2.92C3.56,11.75,3,12.62,3,13.57v0.01C3,14.92,4.08,16,5.42,16H7v4c0,1.1,0.9,2,2,2h6c1.1,0,2-0.9,2-2v-4h1.58 c1.34,0,2.42-1.08,2.42-2.42v-0.01C21,12.62,20.44,11.75,19.56,11.36z M18.58,14h-1.86c-0.35-0.6-0.98-1-1.72-1H9 c-0.74,0-1.38,0.4-1.72,1H5.42c-0.46,0-0.58-0.65-0.17-0.81l6.75-3l6.75,3C19.17,13.38,19.03,14,18.58,14z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
