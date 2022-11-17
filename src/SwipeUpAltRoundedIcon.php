<?php

declare(strict_types=1);

namespace Aciety\Component\MaterialIcons;

use Aciety\Component\MaterialIcons\Attribute\MaterialIcon;
use SVG\Nodes\Shapes\SVGPath;
use SVG\Nodes\Shapes\SVGRect;
use SVG\Nodes\Structures\SVGGroup;
use SVG\SVG;

#[MaterialIcon(
    categories: ['action'],
    tags: ['alt', 'arrows', 'direction', 'disable', 'enable', 'finger', 'hands', 'hit', 'navigation', 'strike', 'swing', 'swpie', 'take', 'up'],
)]
final class SwipeUpAltRoundedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M13,5.41l0.88,0.88c0.39,0.39,1.02,0.39,1.41,0c0.39-0.39,0.39-1.02,0-1.41l-2.59-2.59c-0.39-0.39-1.02-0.39-1.41,0 L8.71,4.88c-0.39,0.39-0.39,1.02,0,1.41c0.39,0.39,1.02,0.39,1.41,0L11,5.41v4.27c-2.28,0.46-4,2.48-4,4.9c0,2.76,2.24,5,5,5 s5-2.24,5-5c0-2.42-1.72-4.44-4-4.9V5.41z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
