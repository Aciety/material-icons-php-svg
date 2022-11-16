<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class ScatterPlotRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGCircle(cx: '7', cy: '14', r: '3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '11', cy: '6', r: '3');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '16.6', cy: '17.6', r: '3');
        $doc->addChild($l0I3);
    }
}
