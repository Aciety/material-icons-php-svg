<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['chart', 'graph', 'lines', 'network', 'ssid', 'wifi'],
)]
final class SsidChartOutlinedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M21,5.47L12,12L7.62,7.62L3,11V8.52L7.83,5l4.38,4.38L21,3L21,5.47z M21,15h-4.7l-4.17,3.34L6,12.41l-3,2.13L3,17l2.8-2 l6.2,6l5-4h4V15z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
