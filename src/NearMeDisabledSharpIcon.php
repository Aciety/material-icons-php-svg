<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['destination', 'direction', 'disabled', 'enabled', 'location', 'maps', 'me', 'navigation', 'near', 'off', 'on', 'pin', 'place', 'point', 'slash'],
)]
final class NearMeDisabledSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l0I0->setStyle('fill', 'none');
        $doc->addChild($l0I0);
        $l0I1 = new SVGPath(d: 'M12,6.34L21,3l-3.34,9L12,6.34z M22.61,19.78L4.22,1.39L2.81,2.81l5.07,5.07L3,9.69v1.41l7.07,2.83L12.9,21h1.41l1.81-4.88 l5.07,5.07L22.61,19.78z');
        $doc->addChild($l0I1);
    }
}
