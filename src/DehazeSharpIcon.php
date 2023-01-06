<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['image'],
    tags: ['adjust', 'dehaze', 'edit', 'editing', 'enhance', 'haze', 'image', 'lines', 'photo', 'photography', 'remove'],
)]
final class DehazeSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M2 16v2h20v-2H2zm0-5v2h20v-2H2zm0-5v2h20V6H2z');
        $doc->addChild($l0I1);
    }
}
