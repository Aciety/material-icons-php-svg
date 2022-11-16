<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class CameraFrontOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M5 20v2h5v2l3-3-3-3v2zm9 0h5v2h-5zM11.99 8C13.1 8 14 7.1 14 6s-.9-2-2.01-2S10 4.9 10 6s.89 2 1.99 2zM17 0H7C5.9 0 5 .9 5 2v14c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2zm0 16H7v-2h10v2zm0-3.5c0-1.67-3.33-2.5-5-2.5s-5 .83-5 2.5V2h10v10.5z');
        $doc->addChild($l0I1);
    }
}
