<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['maps'],
    tags: ['arrow', 'arrows', 'direction', 'directions', 'maps', 'navigation', 'path', 'right', 'route', 'sharp', 'sign', 'slight', 'traffic', 'turn'],
)]
final class TurnSlightRightRoundedIcon extends SVG
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
        $l1I1 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I1->setStyle('fill', 'none');
        $l0I0->addChild($l1I1);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M12.34,5L12.34,5c0-0.55,0.45-1,1-1H17c0.55,0,1,0.45,1,1v3.66c0,0.55-0.45,1-1,1h0c-0.55,0-1-0.45-1-1V7.41l-5,5V19 c0,0.55-0.45,1-1,1h0c-0.55,0-1-0.45-1-1v-6.58c0-0.53,0.21-1.04,0.59-1.41l5-5h-1.24C12.79,6,12.34,5.55,12.34,5z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
