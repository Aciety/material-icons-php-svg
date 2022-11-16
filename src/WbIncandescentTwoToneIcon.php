<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class WbIncandescentTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M14 8.59l-1-.58V4.05h-2v3.96l-1 .58c-1.24.72-2 2.04-2 3.46 0 2.21 1.79 4 4 4s4-1.79 4-4c0-1.42-.77-2.74-2-3.46z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M3.55 19.09l1.41 1.41 1.79-1.8-1.41-1.41zM11 20h2v3h-2zM1 11h3v2H1zm14-4.14V2.05H9v4.81C7.21 7.9 6 9.83 6 12.05c0 3.31 2.69 6 6 6s6-2.69 6-6c0-2.22-1.21-4.15-3-5.19zm-3 9.19c-2.21 0-4-1.79-4-4 0-1.42.77-2.74 2-3.46l1-.58V4.05h2v3.96l1 .58c1.24.72 2 2.04 2 3.46 0 2.21-1.79 4-4 4zM20 11h3v2h-3zm-2.76 7.71l1.79 1.8 1.41-1.41-1.8-1.79z');
        $doc->addChild($l0I2);
    }
}
