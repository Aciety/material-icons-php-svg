<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class LeakAddRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M11.05 21c.5 0 .94-.37.99-.87.41-4.27 3.81-7.67 8.08-8.08.5-.05.88-.48.88-.99 0-.59-.51-1.06-1.1-1-5.19.52-9.32 4.65-9.84 9.83-.06.59.4 1.11.99 1.11zM18 21h3v-3c-1.66 0-3 1.34-3 3zm-2.91 0c.49 0 .9-.36.98-.85.36-2.08 2-3.72 4.08-4.08.49-.08.85-.49.85-.98 0-.61-.54-1.09-1.14-1-2.96.48-5.29 2.81-5.77 5.77-.1.6.39 1.14 1 1.14zM12.97 3.02c-.5 0-.94.37-.99.87-.41 4.27-3.81 7.67-8.08 8.08-.5.05-.88.48-.88.99 0 .59.51 1.06 1.1 1 5.19-.52 9.32-4.65 9.84-9.83.07-.58-.39-1.11-.99-1.11zm-6.94 0h-3v3c1.66 0 3-1.34 3-3zm2.91 0c-.49 0-.9.36-.98.85-.36 2.08-2 3.72-4.08 4.08-.49.09-.85.49-.85.99 0 .61.54 1.09 1.14 1 2.96-.48 5.29-2.81 5.77-5.77.09-.61-.4-1.15-1-1.15z');
        $doc->addChild($l0I1);
    }
}
