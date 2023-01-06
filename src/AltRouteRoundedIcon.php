<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['alt', 'alternate', 'alternative', 'arrows', 'direction', 'maps', 'navigation', 'options', 'other', 'route', 'routes', 'split', 'symbol'],
)]
final class AltRouteRoundedIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M9.78,11.16l-1.42,1.42c-0.68-0.69-1.34-1.58-1.79-2.94l1.94-0.49C8.83,10.04,9.28,10.65,9.78,11.16z M10.15,5.15 L7.35,2.35c-0.2-0.2-0.51-0.2-0.71,0L3.85,5.15C3.54,5.46,3.76,6,4.21,6h1.81C6.04,6.81,6.1,7.54,6.21,8.17l1.94-0.49 C8.08,7.2,8.03,6.63,8.02,6h1.78C10.24,6,10.46,5.46,10.15,5.15z M20.15,5.15l-2.79-2.79c-0.2-0.2-0.51-0.2-0.71,0l-2.79,2.79 C13.54,5.46,13.76,6,14.21,6h1.78c-0.1,3.68-1.28,4.75-2.54,5.88c-0.5,0.44-1.01,0.92-1.45,1.55c-0.34-0.49-0.73-0.88-1.13-1.24 L9.46,13.6C10.39,14.45,11,15.14,11,17c0,0,0,0,0,0h0v4c0,0.55,0.45,1,1,1h0c0.55,0,1-0.45,1-1v-4c0,0,0,0,0,0 c0-2.02,0.71-2.66,1.79-3.63c1.38-1.24,3.08-2.78,3.2-7.37h1.8C20.24,6,20.46,5.46,20.15,5.15z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
