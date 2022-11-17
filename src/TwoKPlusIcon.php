<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['av'],
    tags: ['+', '2k', 'alphabet', 'character', 'digit', 'font', 'letter', 'number', 'plus', 'symbol', 'text', 'type'],
)]
final class TwoKPlusIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-9.5 8.5c0 .55-.45 1-1 1h-2v1h3V15H5v-2.5c0-.55.45-1 1-1h2v-1H5V9h3.5c.55 0 1 .45 1 1v1.5zm4.75 3.5l-1.75-2.25V15H11V9h1.5v2.25L14.25 9H16l-2.25 3L16 15h-1.75zM20 12.5h-1.5V14h-1v-1.5H16v-1h1.5V10h1v1.5H20v1z');
        $doc->addChild($l0I1);
    }
}
