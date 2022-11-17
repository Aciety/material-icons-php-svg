<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\SVG;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['disabled', 'enabled', 'off', 'on', 'paper', 'print', 'printer', 'slash'],
)]
final class PrintDisabledSharpIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M9.65 7H18V3.01H6v.35zm1.01 1.01l9 8.99H22v-5.99c0-1.66-1.34-3-3-3h-8.34zM19 10c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM1.41 1.6L0 3.01l5 5c-1.66 0-3 1.33-3 2.99v6h4v4h12l2.95 2.96 1.41-1.41L1.41 1.6zM8 19.01V15h4l4 4-8 .01z');
        $doc->addChild($l0I1);
    }
}
