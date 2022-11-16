<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class AvTimerRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGCircle(cx: '12', cy: '17', r: '1');
        $doc->addChild($l0I0);
        $l0I1 = new SVGCircle(cx: '7', cy: '12', r: '1');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '17', cy: '12', r: '1');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M12 3c-.55 0-1 .45-1 1v2c0 .55.45 1 1 1s1-.45 1-1v-.92c3.31.48 5.87 3.25 6 6.66.14 3.85-3.03 7.2-6.88 7.26C8.19 19.06 5 15.91 5 12c0-1.68.59-3.22 1.58-4.42l4.71 4.72c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L7.26 5.46c-.38-.38-1-.39-1.4-.02C4.1 7.07 3 9.4 3 12c0 5.04 4.14 9.12 9.21 9 4.7-.11 8.63-4.01 8.78-8.71C21.16 7.19 17.07 3 12 3z');
        $doc->addChild($l0I3);
    }
}
