<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['arrow', 'directional', 'left', 'maps', 'navigation', 'north', 'up', 'west'],
)]
final class NorthWestRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M6,15L6,15c0.56,0,1-0.45,1-1V8.41L17.89,19.3c0.39,0.39,1.02,0.39,1.41,0l0,0c0.39-0.39,0.39-1.02,0-1.41L8.41,7H14 c0.55,0,1-0.45,1-1V6c0-0.55-0.45-1-1-1H6C5.45,5,5,5.45,5,6V14C5,14.55,5.45,15,6,15z');
        $doc->addChild($l0I1);
    }
}
