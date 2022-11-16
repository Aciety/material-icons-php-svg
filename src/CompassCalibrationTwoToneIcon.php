<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGCircle;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class CompassCalibrationTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M4.94 7.26l2.21 2.21c1.44-.91 3.11-1.4 4.85-1.4 1.74 0 3.41.49 4.84 1.4l2.21-2.21C17 5.79 14.56 5 12 5c-2.56 0-5.01.79-7.06 2.26z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGCircle(cx: '12', cy: '17', r: '3');
        $l0I2->setStyle('opacity', '.3');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M17 17c0-2.76-2.24-5-5-5s-5 2.24-5 5 2.24 5 5 5 5-2.24 5-5zm-8 0c0-1.65 1.35-3 3-3s3 1.35 3 3-1.35 3-3 3-3-1.35-3-3zM2 7.15l5 5c1.28-1.28 3.05-2.08 5-2.08s3.72.79 5 2.07l5-5C19.44 4.59 15.9 3 12 3 8.1 3 4.56 4.59 2 7.15zm14.84 2.32c-1.44-.91-3.1-1.4-4.84-1.4-1.74 0-3.41.49-4.85 1.41L4.94 7.26C6.99 5.79 9.44 5 12 5c2.56 0 5 .79 7.05 2.26l-2.21 2.21z');
        $doc->addChild($l0I3);
    }
}
