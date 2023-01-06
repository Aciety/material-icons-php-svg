<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alt', 'arrows', 'direction', 'disable', 'enable', 'finger', 'hands', 'hit', 'navigation', 'strike', 'swing', 'swpie', 'take', 'up'],
)]
final class SwipeUpAltSharpIcon extends SvgIcon
{
    public function __construct()
    {
        parent::__construct();

        $doc = $this->getDocument();
        $l0I0 = new SVGGroup();
        $l1I0 = new SVGRect(x: null, y: null, width: '24', height: '24');
        $l1I0->setStyle('fill', 'none');
        $l0I0->addChild($l1I0);
        $doc->addChild($l0I0);
        $l0I1 = new SVGGroup();
        $l1I0 = new SVGPath(d: 'M13,5.83l1.59,1.59L16,6l-4-4L8,6l1.41,1.41L11,5.83v4.27c-2.28,0.46-4,2.48-4,4.9c0,2.76,2.24,5,5,5s5-2.24,5-5 c0-2.42-1.72-4.44-4-4.9V5.83z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
