<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['arrow', 'directional', 'down', 'left', 'maps', 'navigation', 'south', 'west'],
)]
final class SouthWestRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M15,18L15,18c0-0.56-0.45-1-1-1H8.41L19.3,6.11c0.39-0.39,0.39-1.02,0-1.41l0,0c-0.39-0.39-1.02-0.39-1.41,0L7,15.59V10 c0-0.55-0.45-1-1-1H6c-0.55,0-1,0.45-1,1V18c0,0.55,0.45,1,1,1H14C14.55,19,15,18.55,15,18z');
        $doc->addChild($l0I1);
    }
}
