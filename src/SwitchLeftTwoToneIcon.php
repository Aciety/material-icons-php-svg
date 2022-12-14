<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGPolyline;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['navigation'],
    tags: ['arrows', 'directional', 'left', 'navigation', 'switch', 'toggle'],
)]
final class SwitchLeftTwoToneIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPolyline(points: [[8.5, 8.619999999999999], [8.5, 15.38], [5.12, 12], [8.5, 8.619999999999999]]);
        $l0I1->setStyle('opacity', '.3');
        $doc->addChild($l0I1);
        $l0I2 = new SVGPath(d: 'M8.5,8.62v6.76L5.12,12L8.5,8.62 M10,5l-7,7l7,7V5L10,5z M14,5v14l7-7L14,5z');
        $doc->addChild($l0I2);
    }
}
