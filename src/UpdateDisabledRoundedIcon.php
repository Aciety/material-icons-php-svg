<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class UpdateDisabledRoundedIcon extends SVG
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
        $l0I1 = new SVGPath(d: 'M20.49,20.49L3.51,3.51c-0.39-0.39-1.02-0.39-1.41,0l0,0c-0.39,0.39-0.39,1.02,0,1.41l2.31,2.31 C3.57,8.56,3.05,10.09,3,11.74C2.86,16.83,6.94,21,12,21c1.76,0,3.39-0.52,4.78-1.39l2.29,2.29c0.39,0.39,1.02,0.39,1.41,0l0,0 C20.88,21.51,20.88,20.88,20.49,20.49z M10.72,18.89c-2.78-0.49-5.04-2.71-5.58-5.47c-0.34-1.72-0.03-3.36,0.72-4.73l9.46,9.46 C13.98,18.87,12.4,19.18,10.72,18.89z M13,8v2.17l-2-2V8c0-0.55,0.45-1,1-1S13,7.45,13,8z M20.72,14.23 c-0.23,0.92-0.61,1.77-1.1,2.55l-1.47-1.47c0.27-0.5,0.49-1.03,0.63-1.59C18.89,13.3,19.29,13,19.73,13h0 C20.38,13,20.88,13.61,20.72,14.23z M7.24,4.41c1.46-0.93,3.18-1.45,5-1.41c2.65,0.07,5,1.28,6.6,3.16l1.31-1.31 C20.46,4.54,21,4.76,21,5.21V9.5c0,0.28-0.22,0.5-0.5,0.5h-4.29c-0.45,0-0.67-0.54-0.35-0.85l1.55-1.55C16.12,6.02,14.18,5,12,5 c-1.2,0-2.33,0.31-3.32,0.85L7.24,4.41z');
        $doc->addChild($l0I1);
    }
}
