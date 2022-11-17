<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['alphabet', 'character', 'definition', 'display', 'font', 'high', 'hq', 'letter', 'movie', 'movies', 'quality', 'resolution', 'screen', 'symbol', 'text', 'tv', 'type'],
)]
final class HighQualityTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 6H5v12h14V6zm-8 9H9.5v-2h-2v2H6V9h1.5v2.5h2V9H11v6zm7-1c0 .55-.45 1-1 1h-.75v1.5h-1.5V15H14c-.55 0-1-.45-1-1v-4c0-.55.45-1 1-1h3c.55 0 1 .45 1 1v4zm-3.5-3.5h2v3h-2z');
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M3 6v12c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2zm2 0h14v12H5V6zm4.5 5.5h-2V9H6v6h1.5v-2h2v2H11V9H9.5zM17 9h-3c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1h.75v1.5h1.5V15H17c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1zm-.5 4.5h-2v-3h2v3z');
        $doc->addChild($l0I2);
    }
}
