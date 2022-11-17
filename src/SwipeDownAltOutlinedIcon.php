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
    tags: ['alt', 'arrows', 'direction', 'disable', 'down', 'enable', 'finger', 'hands', 'hit', 'navigation', 'strike', 'swing', 'swpie', 'take'],
)]
final class SwipeDownAltOutlinedIcon extends SVG
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
        $l1I0 = new SVGPath(d: 'M13,13.9c2.28-0.46,4-2.48,4-4.9c0-2.76-2.24-5-5-5S7,6.24,7,9c0,2.42,1.72,4.44,4,4.9v4.27l-1.59-1.59L8,18l4,4l4-4 l-1.41-1.41L13,18.17V13.9z M15,9c0,1.66-1.34,3-3,3s-3-1.34-3-3s1.34-3,3-3S15,7.34,15,9z');
        $l0I1->addChild($l1I0);
        $doc->addChild($l0I1);
    }
}
