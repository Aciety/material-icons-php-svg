<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['charge', 'cord', 'disabled', 'electric', 'electrical', 'enabled', 'off', 'on', 'outlet', 'plug', 'power', 'slash'],
)]
final class PowerOffSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18 14.49V9c0-1.1-.9-2-2-2V3h-2v4h-3.88l7.69 7.69.19-.2zM10 3H8v1.88l2 2zm-5.88.84L2.71 5.25l3.34 3.34c-.03.13-.05.27-.05.4v5.51L9.5 18v3h5v-3l.48-.48 4.47 4.47 1.41-1.41L4.12 3.84z');
        $doc->addChild($l0I1);
    }
}
