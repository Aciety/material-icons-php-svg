<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class CasinoOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '7.5', cy: '16.5', r: '1.5');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '7.5', cy: '7.5', r: '1.5');
        $doc->addChild($l0I3);
        $l0I4 = new SVGCircle(cx: '12', cy: '12', r: '1.5');
        $doc->addChild($l0I4);
        $l0I5 = new SVGCircle(cx: '16.5', cy: '16.5', r: '1.5');
        $doc->addChild($l0I5);
        $l0I6 = new SVGCircle(cx: '16.5', cy: '7.5', r: '1.5');
        $doc->addChild($l0I6);
    }
}
