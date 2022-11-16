<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class WavingHandSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M23,17c0,3.31-2.69,6-6,6v-1.5c2.48,0,4.5-2.02,4.5-4.5H23z M1,7c0-3.31,2.69-6,6-6v1.5C4.52,2.5,2.5,4.52,2.5,7H1z M8.9,3.43L3.42,8.91c-3.22,3.22-3.22,8.44,0,11.67s8.44,3.22,11.67,0l7.95-7.95l-1.77-1.77l-5.3,5.3l-0.71-0.71l7.42-7.42 l-1.77-1.77l-6.72,6.72l-0.71-0.71l7.78-7.78L19.5,2.73l-7.78,7.78L11.02,9.8l6.36-6.36l-1.77-1.77l-8.51,8.51 c1.22,1.57,1.11,3.84-0.33,5.28l-0.71-0.71c1.17-1.17,1.17-3.08,0-4.24l-0.35-0.35l4.95-4.95L8.9,3.43z');
        $doc->addChild($l0I1);
    }
}
