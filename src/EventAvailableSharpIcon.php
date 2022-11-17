<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['approve', 'available', 'calendar', 'check', 'complete', 'date', 'done', 'event', 'mark', 'ok', 'schedule', 'select', 'tick', 'time', 'validate', 'verified', 'yes'],
)]
final class EventAvailableSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16.53 11.06L15.47 10l-4.88 4.88-2.12-2.12-1.06 1.06L10.59 17l5.94-5.94zM21 3h-3V1h-2v2H8V1H6v2H3v18h18V3zm-2 16H5V8h14v11z');
        $doc->addChild($l0I1);
    }
}
