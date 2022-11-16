<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class CompostIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12.87,11.81c-0.23-0.38-0.37-0.83-0.37-1.31C12.5,9.12,13.62,8,15,8l1,0c1.51,0,2-1,2-1s0.55,6-3,6 c-0.49,0-0.94-0.14-1.32-0.38c-0.24,0.64-0.59,1.76-0.76,2.96c1.26,0.22,2.28,0.89,2.77,1.77c1.69-1.17,2.81-3.13,2.81-5.35h3 c0,5.24-4.26,9.5-9.5,9.5S2.5,17.24,2.5,12S6.76,2.5,12,2.5V0l4,4l-4,4V5.5c-3.58,0-6.5,2.92-6.5,6.5c0,2.21,1.11,4.17,2.81,5.35 c0.51-0.92,1.63-1.62,2.98-1.8c-0.09-0.69-0.26-1.42-0.49-2.03C10.45,13.82,10,14,9.5,14c-1.1,0-2-0.9-2-2v-0.99 c0-0.56-0.19-1.09-0.5-1.51c0,0,4.45-0.23,4.5,2.5c0,0.29-0.06,0.56-0.17,0.8C10.91,12.48,10.47,12.2,10,12 c0.58,0.43,1.37,1.37,2,2.6c0.67-1.62,1.68-3.27,3-4.6C14.24,10.52,13.53,11.12,12.87,11.81z');
        $doc->addChild($l0I1);
    }
}