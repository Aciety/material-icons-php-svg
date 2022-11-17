<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['A', 'alphabet', 'arrow', 'character', 'dow', 'field', 'font', 'letter', 'move', 'rotate', 'symbol', 'text', 'type'],
)]
final class TextRotationDownIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M21 12v-1.5L10 5.75v2.1l2.2.9v5l-2.2.9v2.1L21 12zm-7-2.62l5.02 1.87L14 13.12V9.38zM6 19.75l3-3H7V4.25H5v12.5H3l3 3z');
        $doc->addChild($l0I1);
    }
}
