<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['arrow', 'directions', 'maps', 'right', 'route', 'sign', 'traffic'],
)]
final class DirectionsRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGPath(d: 'M0 0h24v24H0V0z');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'm21.71 11.29-9-9a.996.996 0 00-1.41 0l-9 9a.996.996 0 000 1.41l9 9c.39.39 1.02.39 1.41 0l9-9a.996.996 0 000-1.41zM14 14.5V12h-4v2c0 .55-.45 1-1 1s-1-.45-1-1v-3c0-.55.45-1 1-1h5V7.5l3.15 3.15c.2.2.2.51 0 .71L14 14.5z');
        $doc->addChild($l0I1);
    }
}
