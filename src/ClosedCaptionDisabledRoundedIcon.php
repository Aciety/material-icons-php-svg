<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class ClosedCaptionDisabledRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M6.83,4H19c1.1,0,2,0.9,2,2v12c0,0.05-0.01,0.1-0.02,0.16l-3.38-3.38C17.84,14.59,18,14.32,18,14v-0.5 c0-0.28-0.22-0.5-0.5-0.5H17c-0.28,0-0.5,0.22-0.5,0.5h-0.17l-1.83-1.83V10.5h2c0,0.28,0.22,0.5,0.5,0.5h0.5 c0.28,0,0.5-0.22,0.5-0.5V10c0-0.55-0.45-1-1-1h-3c-0.55,0-1,0.45-1,1v0.17L6.83,4z M20.49,21.9c-0.39,0.39-1.02,0.39-1.41,0 l-1.9-1.9H5c-1.11,0-2-0.9-2-2V6c0-0.05,0.02-0.1,0.02-0.15L2.1,4.93c-0.39-0.39-0.39-1.02,0-1.41c0.39-0.39,1.02-0.39,1.41,0 l16.97,16.97C20.88,20.88,20.88,21.51,20.49,21.9z M11,13.83L10.17,13H10c-0.28,0-0.5,0.22-0.5,0.5h-2v-3h0.17L6.4,9.22 C6.16,9.41,6,9.68,6,10v4c0,0.55,0.45,1,1,1h3c0.55,0,1-0.45,1-1V13.83z');
        $doc->addChild($l0I1);
    }
}
