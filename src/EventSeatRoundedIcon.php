<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

final class EventSeatRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M5.5 21c.83 0 1.5-.67 1.5-1.5V18h10v1.5c0 .83.67 1.5 1.5 1.5s1.5-.67 1.5-1.5V17c0-1.1-.9-2-2-2H6c-1.1 0-2 .9-2 2v2.5c0 .83.67 1.5 1.5 1.5zM20 10h1c.55 0 1 .45 1 1v1c0 .55-.45 1-1 1h-1c-.55 0-1-.45-1-1v-1c0-.55.45-1 1-1zM3 10h1c.55 0 1 .45 1 1v1c0 .55-.45 1-1 1H3c-.55 0-1-.45-1-1v-1c0-.55.45-1 1-1zm14 3H7V5c0-1.1.9-2 2-2h6c1.1 0 2 .9 2 2v8z');
        $doc->addChild($l0I1);
    }
}