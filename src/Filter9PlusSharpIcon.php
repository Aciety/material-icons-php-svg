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
final class Filter9PlusSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M3 5H1v18h18v-2H3V5zm11 9V6H9v5h3v1H9v2h5zm-3-5V8h1v1h-1zm12-8H5v18h18V1zm-2 8h-2V7h-2v2h-2v2h2v2h2v-2h2v6H7V3h14v6z');
        $doc->addChild($l0I1);
    }
}
