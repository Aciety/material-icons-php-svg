<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['places'],
    tags: ['bolt', 'camera', 'disabled', 'enabled', 'flash', 'image', 'lightning', 'no', 'off', 'on', 'photo', 'photography', 'picture', 'slash', 'thunderbolt'],
)]
final class NoFlashIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $l1I1 = new SVGPath(d: 'M13.93,13.93L2.45,2.45L1.04,3.87l5.3,5.3L6.14,9.4H3.6C2.72,9.4,2,10.12,2,11v9.4C2,21.28,2.72,22,3.6,22h12.8 c0.75,0,1.38-0.52,1.55-1.22l2.18,2.18l1.41-1.41L18,18L13.93,13.93z M10,20c-2.21,0-4-1.79-4-4c0-1.95,1.4-3.57,3.25-3.92 l1.57,1.57c-0.26-0.09-0.53-0.15-0.82-0.15c-1.38,0-2.5,1.12-2.5,2.5c0,1.38,1.12,2.5,2.5,2.5c1.38,0,2.5-1.12,2.5-2.5 c0-0.29-0.06-0.56-0.15-0.82l1.57,1.57C13.57,18.6,11.95,20,10,20z M18,15.17L10.83,8h1.75l1.28,1.4h2.54c0.88,0,1.6,0.72,1.6,1.6 V15.17z M20.4,5.6H22L19,11V7h-1V2h4L20.4,5.6z');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
    }
}
