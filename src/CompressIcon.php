<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrow', 'arrows', 'collide', 'compress', 'pressure', 'push', 'together'],
)]
final class CompressIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I1->setStyle('fill', 'none');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M8 19h3v3h2v-3h3l-4-4-4 4zm8-15h-3V1h-2v3H8l4 4 4-4zM4 9v2h16V9H4z');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M4 12h16v2H4z');
        $doc->addChild($l0I3);
    }
}
