<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class BackHandSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M2.21,10.47L5,9.36L7.25,15H8V2h2.5v10h1V0H14v12h1V1.5h2.5V12h1V4.5H21V16c0,4.42-3.58,8-8,8c-3.26,0-6.19-1.99-7.4-5.02 L2.21,10.47z');
        $doc->addChild($l0I1);
    }
}
