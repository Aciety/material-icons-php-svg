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
final class AirlineSeatLegroomExtraSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M4 3H2v14h11v-2H4zm18.24 12.96l-2.53 1.15-3.41-6.98C15.96 9.45 15.27 9 14.51 9H11V3H5v11h10l3.41 7 5.07-2.32-1.24-2.72z');
        $doc->addChild($l0I1);
    }
}
