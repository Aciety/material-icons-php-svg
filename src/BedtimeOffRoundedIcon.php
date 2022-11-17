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
final class BedtimeOffRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M11.65 3.46c.27-.71-.36-1.45-1.12-1.34-1.48.21-2.85.76-4.04 1.54l4.59 4.59c-.2-1.56-.04-3.2.57-4.79zm-9.55.05c-.39.39-.39 1.02 0 1.41l1.56 1.56c-1.4 2.11-2.02 4.77-1.46 7.56.79 3.94 3.99 7.07 7.94 7.78 2.74.49 5.3-.15 7.35-1.51l1.57 1.57c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L3.51 3.51c-.39-.39-1.02-.39-1.41 0z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
