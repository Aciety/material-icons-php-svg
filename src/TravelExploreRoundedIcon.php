<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class TravelExploreRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19.3,16.9c0.58-1.01,0.95-2.23,0.51-3.65c-0.53-1.72-2.04-3.05-3.84-3.22c-2.87-0.28-5.23,2.07-4.95,4.95 c0.18,1.79,1.5,3.31,3.22,3.84c1.43,0.44,2.64,0.07,3.65-0.51l2.5,2.5c0.39,0.39,1.01,0.39,1.4,0l0,0c0.39-0.39,0.39-1.01,0-1.4 L19.3,16.9z M15.5,17c-1.4,0-2.5-1.1-2.5-2.5s1.1-2.5,2.5-2.5s2.5,1.1,2.5,2.5S16.9,17,15.5,17z M12,20v2C6.48,22,2,17.52,2,12 C2,6.48,6.48,2,12,2c4.84,0,8.87,3.44,9.8,8h-2.07c-0.64-2.46-2.4-4.47-4.73-5.41V5c0,1.1-0.9,2-2,2h-2v2c0,0.55-0.45,1-1,1H8v2h2v3 H9l-4.79-4.79C4.08,10.79,4,11.38,4,12C4,16.41,7.59,20,12,20z');
        $doc->addChild($l0I1);
    }
}
