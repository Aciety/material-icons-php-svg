<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['communication'],
    tags: ['Android', 'OS', 'current', 'device', 'hardware', 'iOS', 'landscape', 'mobile', 'phone', 'stay', 'tablet'],
)]
final class StayCurrentLandscapeSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M1 19h22V5H1v14zM19 7v10H5V7h14z');
        $doc->addChild($l0I1);
    }
}
