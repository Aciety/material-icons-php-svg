<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['device'],
    tags: ['Android', 'OS', 'add to', 'arrow', 'cell', 'device', 'hardware', 'home', 'iOS', 'mobile', 'phone', 'screen', 'tablet', 'up'],
)]
final class AddToHomeScreenIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I1->setStyle('fill', 'none');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M18 1.01L8 1c-1.1 0-2 .9-2 2v3h2V5h10v14H8v-1H6v3c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM10 15h2V8H5v2h3.59L3 15.59 4.41 17 10 11.41z');
        $doc->addChild($l0I2);
    }
}
