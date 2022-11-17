<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['airline', 'body', 'feet', 'human', 'leg', 'legroom', 'people', 'person', 'reduced', 'seat', 'sitting', 'space', 'travel'],
)]
final class AirlineSeatLegroomReducedRoundedIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19.97 19.2c.18.96-.55 1.8-1.47 1.8h-2.69c-1.3 0-2.26-1.22-1.94-2.49L15 14H9c-1.65 0-3-1.35-3-3V3h6v6h5c1.1 0 2 .9 2 2l-2 7h1.44c.73 0 1.39.49 1.53 1.2zM5 12V4c0-.55-.45-1-1-1s-1 .45-1 1v8c0 2.76 2.24 5 5 5h3c.55 0 1-.45 1-1s-.45-1-1-1H8c-1.66 0-3-1.34-3-3z');
        $doc->addChild($l0I1);
    }
}
