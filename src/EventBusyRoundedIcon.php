<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['busy', 'calendar', 'cancel', 'close', 'date', 'event', 'exit', 'no', 'remove', 'schedule', 'stop', 'time', 'unavailable', 'x'],
)]
final class EventBusyRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M9.84 16.47l1.91-1.91 1.91 1.91c.29.29.77.29 1.06 0 .29-.29.29-.77 0-1.06l-1.91-1.91 1.91-1.91c.29-.29.29-.77 0-1.06-.29-.29-.77-.29-1.06 0l-1.91 1.91-1.91-1.91c-.29-.29-.77-.29-1.06 0-.29.29-.29.77 0 1.06l1.91 1.91-1.91 1.91c-.29.29-.29.77 0 1.06.29.29.77.29 1.06 0zM19 3h-1V2c0-.55-.45-1-1-1s-1 .45-1 1v1H8V2c0-.55-.45-1-1-1s-1 .45-1 1v1H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 16H6c-.55 0-1-.45-1-1V8h14v10c0 .55-.45 1-1 1z');
        $doc->addChild($l0I1);
    }
}
