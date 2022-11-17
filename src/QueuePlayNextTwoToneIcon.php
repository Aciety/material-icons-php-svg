<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['+', 'add', 'arrow', 'desktop', 'device', 'display', 'hardware', 'monitor', 'new', 'next', 'play', 'plus', 'queue', 'screen', 'steam', 'symbol', 'tv'],
)]
final class QueuePlayNextTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M13 15v-3h3v-2h-3V7h-2v3H8v2h3v3zm5 0l3 3-3 3 1.5 1.5L24 18l-4.5-4.5zM8 19v2h8v-2h2v-2H3V5h18v8h2V5c0-1.11-.9-2-2-2H3c-1.11 0-2 .89-2 2v12c0 1.1.89 2 2 2h5z');
        $doc->addChild($l0I1);
    }
}
