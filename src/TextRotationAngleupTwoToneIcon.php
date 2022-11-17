<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['A', 'alphabet', 'angleup', 'arrow', 'character', 'field', 'font', 'letter', 'move', 'rotate', 'symbol', 'text', 'type'],
)]
final class TextRotationAngleupTwoToneIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0zm0 0h24v24H0V0zm0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M16.76 9l1.41 1.41-9.19 9.19 1.41 1.41 9.19-9.19L21 13.24V9h-4.24zm-8.28 3.75l3.54-3.54 2.19.92 1.48-1.48L4.56 4.23 3.5 5.29l4.42 11.14 1.48-1.48-.92-2.2zm-.82-1.72L5.43 6.16l4.87 2.23-2.64 2.64z');
        $doc->addChild($l0I1);
    }
}
