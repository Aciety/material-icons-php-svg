<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['arrow', 'directional', 'left', 'maps', 'navigation', 'west'],
)]
final class WestRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M9.7,18.3L9.7,18.3c0.39-0.39,0.39-1.02,0-1.41L5.83,13H21c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H5.83l3.88-3.88 c0.39-0.39,0.39-1.02,0-1.41l0,0c-0.39-0.39-1.02-0.39-1.41,0L2.7,11.3c-0.39,0.39-0.39,1.02,0,1.41l5.59,5.59 C8.68,18.68,9.32,18.68,9.7,18.3z');
        $doc->addChild($l0I1);
    }
}
