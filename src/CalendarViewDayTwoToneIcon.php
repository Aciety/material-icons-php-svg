<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['calendar', 'date', 'day', 'event', 'format', 'grid', 'layout', 'month', 'schedule', 'today', 'view', 'week'],
)]
final class CalendarViewDayTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M3 17h18v2H3zm16-5v1H5v-1h14m2-2H3v5h18v-5zM3 6h18v2H3z');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M5 12h14v1H5z');
        $l0I2->setStyle('opacity', '.3');
        $doc->addChild($l0I2);
    }
}
