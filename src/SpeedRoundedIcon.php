<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['arrow', 'control', 'controls', 'fast', 'gauge', 'meter', 'motion', 'music', 'slow', 'speed', 'speedometer', 'velocity', 'video'],
)]
final class SpeedRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19.46 10a1 1 0 0 0-.07 1 7.55 7.55 0 0 1 .52 1.81 8 8 0 0 1-.69 4.73 1 1 0 0 1-.89.53H5.68a1 1 0 0 1-.89-.54A8 8 0 0 1 13 6.06a7.69 7.69 0 0 1 2.11.56 1 1 0 0 0 1-.07 1 1 0 0 0-.17-1.76A10 10 0 0 0 3.35 19a2 2 0 0 0 1.72 1h13.85a2 2 0 0 0 1.74-1 10 10 0 0 0 .55-8.89 1 1 0 0 0-1.75-.11z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M10.59 12.59a2 2 0 0 0 2.83 2.83l5.66-8.49z');
        $doc->addChild($l0I2);
    }
}
