<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class GroupWorkOutlinedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '8', cy: '14', r: '2');
        $doc->addChild($l0I2);
        $l0I3 = new SVGCircle(cx: '12', cy: '8', r: '2');
        $doc->addChild($l0I3);
        $l0I4 = new SVGCircle(cx: '16', cy: '14', r: '2');
        $doc->addChild($l0I4);
    }
}
