<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['bedtime', 'nightime', 'off', 'sleep'],
)]
final class BedtimeOffOutlinedIcon extends SVG
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
        $l2I0 = new SVGPath(d: 'M9.27 4.49c-.13.59-.2 1.15-.24 1.71l2.05 2.05c-.27-2.05.1-4.22 1.26-6.23-.12 0-.23-.01-.35-.01-2.05 0-3.93.61-5.5 1.65l1.46 1.46c.42-.24.86-.46 1.32-.63zm-7.88-.27 2.27 2.27C2.61 8.07 2 9.97 2 12c0 5.52 4.48 10 10 10 2.04 0 3.92-.63 5.5-1.67l2.28 2.28 1.41-1.41L2.81 2.81 1.39 4.22zm3.74 3.74 10.92 10.92C14.84 19.6 13.45 20 12 20c-4.41 0-8-3.59-8-8 0-1.48.42-2.85 1.13-4.04z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
