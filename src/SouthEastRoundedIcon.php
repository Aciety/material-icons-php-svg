<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['arrow', 'directional', 'down', 'east', 'maps', 'navigation', 'right', 'south'],
)]
final class SouthEastRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M18,9L18,9c-0.56,0-1,0.45-1,1v5.59L6.12,4.7c-0.39-0.39-1.02-0.39-1.41,0l0,0c-0.39,0.39-0.39,1.02,0,1.41L15.59,17H10 c-0.55,0-1,0.45-1,1V18c0,0.55,0.45,1,1,1H18c0.55,0,1-0.45,1-1V10C19,9.45,18.55,9,18,9z');
        $doc->addChild($l0I1);
    }
}
