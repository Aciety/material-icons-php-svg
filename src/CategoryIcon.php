<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class CategoryIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12 2l-5.5 9h11z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '17.5', cy: '17.5', r: '4.5');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M3 13.5h8v8H3z');
        $doc->addChild($l0I3);
    }
}
