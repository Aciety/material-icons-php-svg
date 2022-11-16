<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

final class BedtimeOffTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M7.95 5.13 9.03 6.2c.05-.55.12-1.12.24-1.71-.46.17-.9.39-1.32.64z');
        $l2I0->addChild($l3I0);
        $l2I0->setStyle('opacity', '.3');
        $l1I0->addChild($l2I0);
        $l2I1 = new SVGGroup();
        $l3I0 = new SVGPath(d: 'M5.13 7.96C4.42 9.15 4 10.52 4 12c0 4.41 3.59 8 8 8 1.45 0 2.84-.4 4.05-1.12L5.13 7.96z');
        $l2I1->addChild($l3I0);
        $l2I1->setStyle('opacity', '.3');
        $l1I0->addChild($l2I1);
        $l2I2 = new SVGPath(d: 'M9.27 4.49c-.13.59-.2 1.15-.24 1.71l2.05 2.05c-.27-2.05.1-4.22 1.26-6.23-.12 0-.23-.01-.35-.01-2.05 0-3.93.61-5.5 1.65l1.46 1.46c.42-.24.86-.46 1.32-.63zM2.81 2.81 1.39 4.22l2.27 2.27C2.61 8.07 2 9.97 2 12c0 5.52 4.48 10 10 10 2.04 0 3.92-.63 5.5-1.67l2.28 2.28 1.41-1.41L2.81 2.81zM12 20c-4.41 0-8-3.59-8-8 0-1.48.42-2.85 1.13-4.04l10.92 10.92C14.84 19.6 13.45 20 12 20z');
        $l1I0->addChild($l2I2);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
