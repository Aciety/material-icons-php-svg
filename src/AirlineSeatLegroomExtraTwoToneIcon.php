<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['airline', 'body', 'extra', 'feet', 'human', 'leg', 'legroom', 'people', 'person', 'seat', 'sitting', 'space', 'travel'],
)]
final class AirlineSeatLegroomExtraTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M4 12V3H2v9c0 2.76 2.24 5 5 5h6v-2H7c-1.66 0-3-1.34-3-3zm18.83 5.24c-.38-.72-1.29-.97-2.03-.63l-1.09.5-3.41-6.98C15.96 9.45 15.27 9 14.51 9H11V3H5v8c0 1.66 1.34 3 3 3h7l3.41 7 3.72-1.7c.77-.36 1.1-1.3.7-2.06z');
        $doc->addChild($l0I1);
    }
}
