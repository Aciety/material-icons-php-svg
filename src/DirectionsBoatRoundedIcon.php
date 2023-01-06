<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['automobile', 'boat', 'car', 'cars', 'direction', 'directions', 'ferry', 'maps', 'public', 'transportation', 'vehicle'],
)]
final class DirectionsBoatRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: '0', width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M20,21c-1.19,0-2.38-0.35-3.47-0.98c-0.33-0.19-0.73-0.19-1.07,0c-2.17,1.26-4.76,1.26-6.93,0 c-0.33-0.19-0.73-0.19-1.07,0C6.38,20.65,5.19,21,4,21H3c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h1c1.38,0,2.74-0.35,4-0.99 c2.52,1.29,5.48,1.29,8,0c1.26,0.65,2.62,0.99,4,0.99h1c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H20z M3.95,19H4 c1.27,0,2.42-0.55,3.33-1.33c0.39-0.34,0.95-0.34,1.34,0C9.58,18.45,10.73,19,12,19s2.42-0.55,3.33-1.33 c0.39-0.34,0.95-0.34,1.34,0C17.58,18.45,18.73,19,20,19h0.05l1.9-6.68c0.11-0.37,0.04-1.06-0.66-1.28L20,10.62V6c0-1.1-0.9-2-2-2 h-3V2c0-0.55-0.45-1-1-1h-4C9.45,1,9,1.45,9,2v2H6C4.9,4,4,4.9,4,6v4.62l-1.29,0.42c-0.63,0.19-0.81,0.84-0.66,1.28L3.95,19z M6,6 h12v3.97L12.62,8.2c-0.41-0.13-0.84-0.13-1.25,0L6,9.97V6z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
