<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['image'],
    tags: ['+', '9', 'digit', 'edit', 'editing', 'effect', 'filter', 'image', 'images', 'multiple', 'number', 'photography', 'picture', 'pictures', 'plus', 'settings', 'stack', 'symbol'],
)]
final class Filter9PlusTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M7 17h14v-6h-2v2h-2v-2h-2V9h2V7h2v2h2V3H7v14zm2-5h3v-1h-1c-1.1 0-2-.89-2-2V8c0-1.11.9-2 2-2h1c1.1 0 2 .89 2 2v4c0 1.11-.9 2-2 2H9v-2z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M19 21H3V5H1v16c0 1.1.9 2 2 2h16v-2z');
        $doc->addChild($l0I2);
        $l0I3 = new SVGPath(d: 'M11 8h1v1h-1z');
        $l0I3->setStyle('opacity', '.3');
        $doc->addChild($l0I3);
        $l0I4 = new SVGPath(d: 'M12 6h-1c-1.1 0-2 .89-2 2v1c0 1.11.9 2 2 2h1v1H9v2h3c1.1 0 2-.89 2-2V8c0-1.11-.9-2-2-2zm0 3h-1V8h1v1zm9-8H7c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V3c0-1.1-.9-2-2-2zm0 8h-2V7h-2v2h-2v2h2v2h2v-2h2v6H7V3h14v6z');
        $doc->addChild($l0I4);
    }
}
