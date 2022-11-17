<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['calendar', 'date', 'day', 'event', 'format', 'grid', 'layout', 'month', 'schedule', 'today', 'view', 'week'],
)]
final class CalendarViewDaySharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M3 17h18v2H3v-2zm0-7h18v5H3v-5zm0-4h18v2H3V6z');
        $doc->addChild($l0I1);
    }
}
