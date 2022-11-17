<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['analytics', 'bar', 'chart', 'data', 'diagram', 'graph', 'infographic', 'measure', 'metrics', 'statistics', 'tracking', 'waterfall'],
)]
final class WaterfallChartRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M0,0h24v24H0V0z');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M19.5,4L19.5,4C20.33,4,21,4.67,21,5.5v13c0,0.83-0.67,1.5-1.5,1.5h0c-0.83,0-1.5-0.67-1.5-1.5v-13 C18,4.67,18.67,4,19.5,4z M4.5,13L4.5,13C5.33,13,6,13.67,6,14.5v4C6,19.33,5.33,20,4.5,20h0C3.67,20,3,19.33,3,18.5v-4 C3,13.67,3.67,13,4.5,13z M15.5,4L15.5,4C16.33,4,17,4.67,17,5.5v0C17,6.33,16.33,7,15.5,7h0C14.67,7,14,6.33,14,5.5v0 C14,4.67,14.67,4,15.5,4z M11.5,5L11.5,5C12.33,5,13,5.67,13,6.5v1C13,8.33,12.33,9,11.5,9h0C10.67,9,10,8.33,10,7.5v-1 C10,5.67,10.67,5,11.5,5z M8.5,10L8.5,10c0.83,0,1.5,0.67,1.5,1.5v1c0,0.83-0.67,1.5-1.5,1.5h0C7.67,14,7,13.33,7,12.5v-1 C7,10.67,7.67,10,8.5,10z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
