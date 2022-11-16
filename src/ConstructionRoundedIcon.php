<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class ConstructionRoundedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M20.99,17.99l-4.94-4.94l-2.12,2.12l4.94,4.94c0.59,0.59,1.54,0.59,2.12,0C21.57,19.52,21.57,18.57,20.99,17.99z');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGPath(d: 'M17.65,10c1.93,0,3.5-1.57,3.5-3.5c0-0.58-0.16-1.12-0.41-1.6l-2.7,2.7l-1.49-1.49l2.7-2.7C18.77,3.16,18.23,3,17.65,3 c-1.93,0-3.5,1.57-3.5,3.5c0,0.41,0.08,0.8,0.21,1.16l-1.85,1.85l-1.78-1.78l0,0c0.39-0.39,0.39-1.02,0-1.41l-0.71-0.71l2.12-2.12 c-1.17-1.17-3.07-1.17-4.24,0L5.08,6.32c-0.39,0.39-0.39,1.02,0,1.41l0.71,0.71H3.25c-0.19,0-0.37,0.07-0.5,0.21 c-0.28,0.28-0.28,0.72,0,1l2.54,2.54c0.28,0.28,0.72,0.28,1,0c0.13-0.13,0.21-0.31,0.21-0.5V9.15L7.2,9.85 c0.39,0.39,1.02,0.39,1.41,0l1.78,1.78l-6.35,6.35c-0.59,0.59-0.59,1.54,0,2.12v0c0.59,0.59,1.54,0.59,2.12,0L16.48,9.79 C16.85,9.92,17.24,10,17.65,10z');
        $l1I0->addChild($l2I1);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
