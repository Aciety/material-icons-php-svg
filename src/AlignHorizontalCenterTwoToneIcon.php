<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class AlignHorizontalCenterTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPolygon(points: [[11, 2], [13, 2], [13, 7], [21, 7], [21, 10], [13, 10], [13, 14], [18, 14], [18, 17], [13, 17], [13, 22], [11, 22], [11, 17], [6, 17], [6, 14], [11, 14], [11, 10], [3, 10], [3, 7], [11, 7]]);
        $doc->addChild($l0I1);
    }
}
