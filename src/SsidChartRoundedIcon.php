<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['device'],
    tags: ['chart', 'graph', 'lines', 'network', 'ssid', 'wifi'],
)]
final class SsidChartRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M3,9.03c0-0.32,0.15-0.62,0.41-0.81L7.14,5.5c0.4-0.29,0.95-0.25,1.3,0.1l3.78,3.78l7.2-5.23C20.07,3.67,21,4.14,21,4.96 c0,0.32-0.15,0.62-0.41,0.81l-7.9,5.73c-0.4,0.29-0.95,0.25-1.29-0.1L7.62,7.62L4.59,9.84C3.93,10.32,3,9.85,3,9.03z M21,16 c0-0.55-0.45-1-1-1h-3.35c-0.23,0-0.45,0.08-0.62,0.22l-3.9,3.12L6.6,12.99c-0.35-0.34-0.88-0.38-1.27-0.1l-1.9,1.35 C3.16,14.43,3,14.74,3,15.06c0,0.81,0.92,1.29,1.58,0.81L5.8,15l5.57,5.39c0.36,0.35,0.93,0.38,1.32,0.06L17,17h3 C20.55,17,21,16.55,21,16z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
