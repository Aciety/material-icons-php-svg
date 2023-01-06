<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['av'],
    tags: ['alphabet', 'camera', 'card', 'character', 'data', 'device', 'digital', 'drive', 'flash', 'font', 'image', 'letter', 'memory', 'photo', 'sd', 'secure', 'symbol', 'text', 'type'],
)]
final class SdIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-6 6h4c.55 0 1 .45 1 1v4c0 .55-.45 1-1 1h-4V9zm-3.5 4.5v-1H7c-.55 0-1-.45-1-1V10c0-.55.45-1 1-1h3c.55 0 1 .45 1 1v1H9.5v-.5h-2v1H10c.55 0 1 .45 1 1V14c0 .55-.45 1-1 1H7c-.55 0-1-.45-1-1v-1h1.5v.5h2zm5 0h2v-3h-2v3z');
        $doc->addChild($l0I1);
    }
}
