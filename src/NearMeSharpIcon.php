<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['destination', 'direction', 'location', 'maps', 'me', 'navigation', 'near', 'pin', 'place', 'point', 'stop'],
)]
final class NearMeSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21 3L3 10.53v.98l6.84 2.65L12.48 21h.98L21 3z');
        $doc->addChild($l0I1);
    }
}
