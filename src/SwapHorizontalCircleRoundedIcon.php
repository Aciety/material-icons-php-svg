<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['action'],
    tags: ['arrow', 'arrows', 'back', 'circle', 'forward', 'horizontal', 'swap'],
)]
final class SwapHorizontalCircleRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12s4.48 10 10 10 10-4.48 10-10zm-7-5.5l3.15 3.15c.2.2.2.51 0 .71L15 13.5V11h-4V9h4V6.5zm-6 11l-3.15-3.15c-.2-.2-.2-.51 0-.71L9 10.5V13h4v2H9v2.5z');
        $doc->addChild($l0I1);
    }
}
