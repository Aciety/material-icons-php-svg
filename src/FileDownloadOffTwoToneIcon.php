<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolygon;
use SVG\Nodes\Shapes\SVGRect;
use SVG\SVG;

final class FileDownloadOffTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPolygon(points: [[13, 5], [11, 5], [11, 8.17], [13, 10.17]]);
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M11,8.17l-2-2V3h6v6h4l-3.59,3.59L13,10.17V5h-2V8.17z M21.19,21.19L2.81,2.81L1.39,4.22L6.17,9H5l7,7l0.59-0.59L15.17,18H5 v2h12.17l2.61,2.61L21.19,21.19z');
        $doc->addChild($l0I2);
    }
}
