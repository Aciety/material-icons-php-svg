<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['notification'],
    tags: ['arrow', 'directions', 'disabled', 'enabled', 'maps', 'off', 'on', 'right', 'route', 'sign', 'slash', 'traffic'],
)]
final class DirectionsOffIcon extends SVG
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $doc->setAttribute('viewBox', '0 0 24 24');
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGGroup();
        $l2I0 = new SVGPath(d: 'M12.83 10h.67V7.5L17 11l-1.59 1.59L18.83 16l2.59-2.59c.78-.78.78-2.05 0-2.83l-7.99-8c-.78-.78-2.05-.78-2.83 0L8 5.17 12.83 10zM2.81 2.81 1.39 4.22 5.17 8l-2.59 2.59c-.78.78-.78 2.05 0 2.83l8.01 8c.78.78 2.05.78 2.83 0L16 18.83l3.78 3.78 1.41-1.41L2.81 2.81zM10 15H8v-4c0-.05.02-.09.03-.14L10 12.83V15z');
        $l1I0->addChild($l2I0);
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
